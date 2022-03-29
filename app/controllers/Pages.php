<?php

class Pages extends Controller
{
    public function __construct()
    {
        $this->penModel = $this->model('Pen');
    }

    public function index()
    {
        //Bring in the data 
        $pens = $this->penModel->getPens();

        //Load the data to pass in
        $data = [
            'pens' => $pens
        ];

        $this->view('pages/index', $data);
    }

    public function show_pen($id)
    {
        $pen = $this->penModel->getPenById($id);

        $data = [
            'pen' => $pen
        ];

        $this->view('pages/show_pen', $data);
    }

    public function add_pen()
    {

        $pen_brand = $pen_name = $pen_color = $nib = $filling_mech = $ink_brand = $ink_color = $date_filled = '';


        //Sanitizing stuff as it's coming in
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Santizing with a host of methods...
            $pen_brand = $this->test_input($_POST['pen-brand']);
            $pen_name = $this->test_input($_POST['pen-name']);
            $pen_color = $this->test_input($_POST['pen-color']);
            $nib = $this->test_input($_POST['nib']);
            $filling_mech = $this->test_input($_POST['filling-mech']);
            $ink_brand = $this->test_input($_POST['ink-brand']);
            $ink_color = $this->test_input($_POST['ink-color']);
            $date_filled = $this->test_input($_POST['date-filled']);

            //Loading up the stuff in an associative array
            $data = [
                'pen_brand' => $pen_brand,
                'pen_name' => $pen_name,
                'pen_color' => $pen_color,
                'nib' => $nib,
                'filling_mech' => $filling_mech,
                'ink_brand' => $ink_brand,
                'ink_color' => $ink_color,
                'date_filled' => $date_filled,
                'edit_data' => false,
                'err' => ''
            ];

            //Checking to see if any were left blank
            if (
                empty($data['pen_brand']) ||
                empty($data['pen_name']) ||
                empty($data['pen_color']) ||
                empty($data['nib']) ||
                empty($data['filling_mech']) ||
                empty($data['ink_brand']) ||
                empty($data['ink_color']) ||
                empty($data['date_filled'])

            ) {
                $data['err'] = 'Please complete all fields!';
            }


            //If the error log is good, we can push forward with the request
            if (empty($data['err'])) {
                //Buried the request in a clever bit of error handling...
                if ($this->penModel->addPen($data)) {
                    redirect('pages');
                } else {
                    die('something went wrong');
                }
                //load view with error
            } else {
                $this->view('pages/add_pen', $data);
            }
        } else {
            //Keeping our stuff in place in case of an error
            $data = [
                'pen_brand' => (isset($_POST['pen-brand']) ? trim($_POST['pen-brand']) : ''),
                'pen_name' => (isset($_POST['pen-name']) ? trim($_POST['pen-name']) : ''),
                'pen_color' => (isset($_POST['pen-color']) ? trim($_POST['pen-color']) : ''),
                'nib' => (isset($_POST['nib']) ? trim($_POST['nib']) : ''),
                'filling_mech' => (isset($_POST['filling-mech']) ? trim($_POST['filling-mech']) : ''),
                'ink_brand' => (isset($_POST['ink-brand']) ? trim($_POST['ink-brand']) : ''),
                'ink_color' => (isset($_POST['ink-color']) ? trim($_POST['ink-color']) : ''),
                'date_filled' => (isset($_POST['date-filled']) ? trim($_POST['date-filled']) : ''),
            ];

            $this->view('pages/add_pen', $data);
        }
    }

    public function delete_pen($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //call delete method from post model
            if ($this->penModel->deletePen($id)) {
                redirect('pages');
            } else {
                die('something went wrong');
            }
        } else {
            redirect('pages');
        }
    }

    public function edit_pen($id)
    {
        $this->view('pages/edit_pen');
    }

    private function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
