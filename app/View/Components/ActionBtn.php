<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionBtn extends Component
{
    public $viewUrl;
    public $editUrl;
    public $deleteUrl;

    /**
     * Create a new component instance.
     *
     * @param string $url
     * @param int|string $id
     */
    public function __construct(string $url, $id)
    {
        $this->viewUrl = route($url . '.show', $id);
        $this->editUrl = route($url . '.edit', $id);
        $this->deleteUrl = route($url . '.destroy', $id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.action-btn');
    }
}
