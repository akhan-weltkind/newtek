<?php
namespace App\Modules\Tree\Http\ViewComposers;

use Illuminate\View\View;
use App\Modules\Tree\Models\TreeRepository;

class FooterMenuComposer
{

    protected $repository;

    public function __construct(TreeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function compose(View $view){

        $items = $this->repository->getFooterMenu();

        $view->with('footerItems', $this->repository->getFooterMenu());
    }
}