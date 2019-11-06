<?php 

    defined('BASEPATH') OR exit('No direct script access allowed');  
    
    class Import extends MY_Controller {  

        function __construct() {
            parent::__construct();
            $this->load->database();
            $this->load->model('Import_model');
        }
        
    public function uploadData(){

    if ($this->input->post('submit')) {
            $path = $_FILES['uploadFile']['tmp_name'];
            require_once (APPPATH."/third_party/PHPExcel.php");
            require_once (APPPATH."/libraries/IOFactory.php");
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'xlsx|xls';
            $config['remove_spaces'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);            
            $inputFileName = $path ;
            try {
                $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
                $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                $flag = true;
                $i=0;
                foreach ($allDataInSheet as $value) {
                    if($flag){
                    $flag =false;
                    continue;
                    }
                    $inserdata[$i]['pr_title'] = $value['A'];
                    $inserdata[$i]['pr_description'] = $value['B'];
                    $inserdata[$i]['pr_price'] = $value['C'];
                    $i++;
                }               
                $result = $this->Import_model->importdata($inserdata);   
                if($result){
                    echo "Imported successfully";
                }else{
                    echo "ERROR !";
                }             

            } catch (Exception $e) {
                die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                        . '": ' .$e->getMessage());
            }
            }else{
                echo $error['error'];
            }    
        }
    }
?>