<?php
    function index() {
        $data['content_view'] = 'admin/home';
        $this->template->sample_template($data);
    }
?>