<?php 
$this->output('header'); 
echo $db;
?>
<body>
    <div id="konten">
        <h1>Management Dictionary</h1>
        <fieldset>
            <legend>Form</legend>
            <form action="">
                <div>
                    <span>Bahasa Indonesia</span> 
                    <span style="padding-left: 10px">
                        <input type="text" name="ina_lang">
                    </span>
                </div>
                <div>
                    <span>Bahasa Cirebon</span> 
                    <span style="padding-left: 29px">
                        <input type="text" name="crb_lang">
                    </span>
                </div>
                <div>
                    <span>Bahasa Inggris</span> 
                    <span style="padding-left: 34px">
                        <input type="text" name="eng_lang">
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
    </div>
    <?php $this->output('footer'); ?>