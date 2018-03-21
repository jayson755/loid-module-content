<?php

return [
    /*不用登陆就能访问的方法*/
    'no_login_method' => [],
    
    /*不用授权就能访问的类*/
    'no_auth_class' => [],
    
    /*不用授权就能访问的方法*/
    'no_auth_method' => ['getjQGridList'],
    
    /*不用授权就能访问的类方法*/
    'no_auth_class_method' => [],
    
    /*菜单权限配置*/
    
    'menus' => [
        'content' => [
            'label' => '内容管理',
            'icon'  => 'fa-file',
            'menu'  => array(
                array('label' => '分类管理','display'=>true, 'alias' => 'content.category', 'method' => 'get'),
                
                array('label' => '文章管理','display'=>true, 'alias' => 'content.article', 'method' => 'get'),
                
                array('label' => '标签管理','display'=>true, 'alias' => 'content.tag', 'method' => 'get'),
                
                array('label' => '评论管理','display'=>true, 'alias' => 'content.comment', 'method' => 'get'),
            ),
            
        ],
    ],
];