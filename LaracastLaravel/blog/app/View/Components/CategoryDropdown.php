<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryDropdown extends Component
{
    /**

     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-dropdown',[
            'categories' => Category::all(),
    'currentCategory' => Category::firstWhere('slug', request('category')),

        ]);
    }
}
