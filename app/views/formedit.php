<?php

/* jenal<warungkopidigital.blogspot.com> */
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$id=$ina=$crb=$eng="";
foreach ($formdt as $attfrm)
{
    $id=$attfrm->id;
    $ina=$attfrm->ina_lang;
    $crb=$attfrm->crb_lang;
    $eng=$attfrm->eng_lang;
}
?>      
        <fieldset>
            <legend>Form</legend>
            <form action="<?php echo $baseurl;?>home/update" method="POST">
                <input type="hidden" name="id_dict" value="<?php echo $id;?>"/>
                <div>
                    <span>Bahasa Indonesia</span> 
                    <span style="padding-left: 10px">
                        <input type="text" name="ina_lang" value="<?php echo $ina;?>">
                    </span>
                </div>
                <div>
                    <span>Bahasa Cirebon</span> 
                    <span style="padding-left: 29px">
                        <input type="text" name="crb_lang" value="<?php echo $crb;?>">
                    </span>
                </div>
                <div>
                    <span>Bahasa Inggris</span> 
                    <span style="padding-left: 34px">
                        <input type="text" name="eng_lang" value="<?php echo $eng;?>">
                    </span>
                </div>
                <div>
                    <span>
                        <input type="submit" name="submit" value="Simpan">
                    </span> 
                    <span>
                        <input type="reset" name="reset" value="Batal">
                    </span>
                </div>
            </form>
        </fieldset>