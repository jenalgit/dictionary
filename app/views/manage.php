<?php
$this->output('header');
?>
<style>
    table{border: 1px solid #191}
    td,th{border: 1px solid #000;}
</style>
<body>
    <div id="konten">
        <h1>Management Dictionary</h1>
       
        <?php 
        $form['formdt']=$formdt;
        $form['baseurl']=$baseurl;
        $this->output($content,$form); ?>
        <div id="datadict"> 
            <fieldset>
                <legend>Data</legend>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Cirebon</th>
                            <th>Indonesia</th>
                            <th>English</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php
                        $no = 1;
                       
                        foreach ($datas as $data) {
                            echo "
                        <tr>
                            <td>$no</td>
                            <td>$data->crb_lang</td>
                            <td>$data->ina_lang</td>
                            <td>$data->eng_lang</td>
                            <td><a href='".$baseurl."home/edit/$data->id'>edit</a> | <a href='".$baseurl."home/delete/$data->id'>delete</a></td>
                        </tr>";
                            $no++;
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">Todal data : </td>
                        </tr>
                    </tfoot>
                </table>
            </fieldset>
        </div>
    </div>
    <?php $this->output('footer'); ?>