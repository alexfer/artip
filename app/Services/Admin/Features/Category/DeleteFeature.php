<?php

namespace Artip\Services\Admin\Features\Category;

use Illuminate\Http\Request;
use Lucid\Foundation\Feature;
use Illuminate\Support\Facades\App;
use Artip\Data\Models\Category;
use Artip\Domains\Category\Jobs\GetJob;

class DeleteFeature extends Feature
{

    public function handle(Request $request)
    {
        /** @var Category $category */
        $category = $this->run(GetJob::class, ['id' => $request->id]);
        $events = $category->events()->get();
        if ($events->count()) {
            \Session::flash('warning', 'You can not delete this category because there are some events with this category');

            return response()->json([
                        'redirect' => route('categories.edit', [
                            'locale' => App::getLocale(),
                            'id' => $request->id
            ])]);
        } else {
            $category->artists()->detach();
            $category->events()->detach();
            $category->eventGroups()->detach();
            $category->venues()->detach();
            $category->countries()->detach();
            $category->delete();
            \Session::flash('success', _i('This category deleted successfully.'));

            return response()->json([
                        'redirect' => route('categories.index', [
                            'locale' => App::getLocale(),
            ])]);
        }
    }

}
