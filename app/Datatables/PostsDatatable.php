<?php

namespace App\Datatables;

use Sebastienheyd\Boilerplate\Datatables\Button;
use Sebastienheyd\Boilerplate\Datatables\Column;
use Sebastienheyd\Boilerplate\Datatables\Datatable;
use App\Models\Post;
use App\Models\Boilerplate\User;
use Auth;

class PostsDatatable extends Datatable
{
    public $slug = 'posts';

    public function datasource()
    {
        $post;
        if (Auth::user()->hasPermission('all-post')) {
            $post = Post::leftJoin('users', 'users.id', 'posts.user_id')->where('posts.status', 1)->get([
                'posts.id',
                'users.first_name',
                'title',
                'slug',
                'post_date',
                'category',
                'tumbnail',
                'tag',
                'post_status',
            ]);
        }else {
            $post = Post::leftJoin('users', 'users.id', 'posts.user_id')->where([['posts.status', '=', 1], ['users.id', '=', Auth::user()->id]])->get([
                'posts.id',
                'users.first_name',
                'title',
                'slug',
                'post_date',
                'category',
                'tumbnail',
                'tag',
                'post_status',
            ]);
        }
        return $post;
    }

    public function setUp()
    {
    }

    public function columns(): array
    {
        return [
            Column::add()
                ->width('40px')
                ->data('post_status', function (Post $Post) {
                    $badge = '<span class="badge badge-pill badge-%s">%s</span>';
                    if ($Post->post_status == 2) {
                        return sprintf($badge, 'success', __('Posted'));
                    }

                    return sprintf($badge, 'info', __('Draft'));
                })
                ->notSortable(),

            Column::add('Title')
                ->data('title'),
                
            Column::add('Category')
                ->data('category'),

            Column::add('Post Date')
                ->data('post_date'),

            Column::add('Aksi')
                ->actions(function(Post $Post) {
                    return join([
                        Button::edit('boilerplate.edit-post', $Post->id),    
                        Button::delete('boilerplate.delete-post', $Post->id),           
                    ]);
                    
                })
        ];
    }
}