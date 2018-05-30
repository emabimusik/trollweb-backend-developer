The Sql script contains all you need  to get started.
Include/config.php has the database configuration need to be raplace with your own configuration for connecting to your database
define('DBHOST', 'Your Hosting');
define('DBUSER', 'Your Db user');
define('DBPASS', 'Your Db Pass');
define('DBNAME', 'blog');



Exercise-02  om blog

Blog

http://localhost:8888/trollweb-backend-developer/



Blog-Admin

http://localhost:8888/trollweb-backend-developer/admin/

demo-user : demo;

demo-pass: demo;


Blog system

Make a simple blog system with vanilla PHP.
Pages

    /blog - a list of all blog posts.
    /blog/{id} - a single blog post page.
    /admin - a backend to edit/delete/create posts.

Requirements

    The backend should be password-protected.
    Don't use any existing PHP frameworks or packages.
    Spend little (or no time at all) on the design and CSS.
    Use a CSS framework if you have to make it pretty.

Extra credit

    Create the system with TDD.
