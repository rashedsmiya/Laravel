<?php

    namespace App\Services;

    use App\Models\Category;

    class CategoryService{

        public function getCategories(){
            return Category::all();
        }

        public function getActiveCategories($id)
        {
            return Category::where('status', 1)->get();
        }

        public function getDeactiveCategories()
        {
            return Category::where('status', 0)->get();
        }
        public function categoryStore($data)
        {
            Category::create($data);
        }

        public function  categoryUpdate($id, $date)
        {
            Category::findOrFail($id)->update($date);
        }

        public function getCategory($id)
        {
            return Category::findOrFail($id);
        }

    }

