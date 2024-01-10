<?php

namespace domain\Services;

use App\Models\Categories;
use App\Models\NewsItems;

class NewsService
{
    protected $news;
    protected $category;


    public function __construct()
    {
        $this->news = new NewsItems();
        $this->category = new Categories();
    }

    /**
     * all
     *
     * @return void
     */
    public function all()
    {
        return  $this->news::all()->sortByDesc('created_at');
    }

    /**
     * get
     *
     * @param  mixed $product_id
     * @return void
     */
    public function get($id)
    {
        return $this->news->find($id);
    }

    public function store($data)
    {
        $news = $this->news->create([
            'title' => $data['title'],
            'content' => $data['description'],
        ]);

        if ($data['category']) {
            foreach ($data['category'] as $category) {
                $category = $this->category->find($category);
                $news->categoryData()->attach($category);
            }
        }
    }

}
