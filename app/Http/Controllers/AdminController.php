<?php
// app/Http/Controllers/AdminController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GroceryCrud\Core\GroceryCrud;

class AdminController extends Controller
{

    /**
     * Grocery CRUD Example
     *
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */


    public function countries()
    {
        $crud = $this->_getGroceryCrudEnterprise();

        $crud->setTable('countries');
        $crud->setSubject('Country', 'Contries');

        $output = $crud->render();

        return $this->_showOutput($output);
    }

    public function products()
    {
        $crud = $this->_getGroceryCrudEnterprise();

        $crud->setTable('products');
        $crud->setSubject('Product', 'Products');

        $crud->setRelation('country','countries','name');

        $crud->setRelation('category','categories','naziv');
    //    $crud->setRelation('pointsValue','categories','points');

        $output = $crud->render();

        return $this->_showOutput($output);
    }

    public function prizes()
    {
        $crud = $this->_getGroceryCrudEnterprise();

        $crud->setTable('prizes');
        $crud->setSubject('Prize', 'Prizes');

//        $crud->setRelation('country','countries','name');
//
//        $crud->setRelation('category','categories','naziv');
//        $crud->setRelation('pointsValue','categories','points');

        $output = $crud->render();

        return $this->_showOutput($output);
    }

    public function categories()
    {
        $crud = $this->_getGroceryCrudEnterprise();

        $crud->setTable('categories');
        $crud->setSubject('Category', 'Categories');

        $output = $crud->render();

        return $this->_showOutput($output);
    }

    public function users()
    {
        $crud = $this->_getGroceryCrudEnterprise();

        $crud->setTable('users');
        $crud->setSubject('User', 'User');

    //    $crud->setRelation('country_id','countries','name');

        $output = $crud->render();

        return $this->_showOutput($output);
    }

    public function settings()
    {
        $crud = $this->_getGroceryCrudEnterprise();

        $crud->setTable('settings');
        $crud->setSubject('Setting', 'Settiings');

        $output = $crud->render();

        return $this->_showOutput($output);
    }

    public function orders()
    {
        $crud = $this->_getGroceryCrudEnterprise();

        $crud->setTable('orders');
        $crud->setSubject('Order', 'Order');

        $crud->setRelation('user_id','users','name');

        $output = $crud->render();

        return $this->_showOutput($output);
    }

    public function receipts()
    {
        $crud = $this->_getGroceryCrudEnterprise();

        $crud->setTable('receipts');
        $crud->setSubject('Receipt', 'Receipts');

     //   $crud->setRelation('user_id','users','name');

        $output = $crud->render();

        return $this->_showOutput($output);
    }

    /**
     * Get everything we need in order to load Grocery CRUD
     *
     * @return GroceryCrud
     * @throws \GroceryCrud\Core\Exceptions\Exception
     */
    private function _getGroceryCrudEnterprise() {
        $database = $this->_getDatabaseConnection();
        $config = config('grocerycrud');

        $crud = new GroceryCrud($config, $database);

        // Don't forget those two below lines if you are
        // using CSRF protection (enabled by default on Laravel)
        $crud->setCsrfTokenName('_token');
        $crud->setCsrfTokenValue(csrf_token());

        return $crud;
    }

    /**
     * Grocery CRUD Output
     *
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    private function _showOutput($output) {
        if ($output->isJSONResponse) {
            return response($output->output, 200)
                ->header('Content-Type', 'application/json')
                ->header('charset', 'utf-8');
        }

        $js_files = $output->js_files;
        $output = $output->output;

        return view('default_template', [
            'output' => $output,
            'js_files' => $js_files
        ]);
    }

    private function _getDatabaseConnection() {

        return [
            'adapter' => [
                'driver' => 'Pdo_Mysql',
                'database' => env('DB_DATABASE'),
                'username' => env('DB_USERNAME'),
                'password' => env('DB_PASSWORD'),
                'charset' => 'utf8'
            ]
        ];
    }

}
