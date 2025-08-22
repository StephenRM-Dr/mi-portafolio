<?php

class ProjectsController {
    public function index() {

        // Ejemplo inicial de proyectos
        $projects = [
            [
                'title' => 'Sistema de Blog en PHP MVC',
                'description' => 'Aplicación modular con PDO, validación y diseño con Tailwind CSS.',
                'link' => 'https://github.com/stephen/blog-mvc',
                'tags' => ['PHP', 'MVC', 'TailwindCSS']
            ],
            [
                'title' => 'API REST para Inventario',
                'description' => 'API construida en PHP con autenticación JWT y manejo de errores.',
                'link' => 'https://github.com/stephen/api-inventario',
                'tags' => ['PHP', 'API', 'MySQL']
            ],
            [
                'title' => 'Landing Page Responsive',
                'description' => 'Página optimizada para SEO con Tailwind CSS y JavaScript.',
                'link' => 'https://github.com/stephen/landing-page',
                'tags' => ['HTML', 'CSS', 'JavaScript']
            ],
        ];

        require __DIR__ . '/../../resources/projects.template.php';
    }
}
