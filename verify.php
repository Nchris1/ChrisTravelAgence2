
    <?php 
        if(!empty($_POST['email']) && !empty($_POST["password"])) {
            $secret = "6LeQN34aAAAAANtpY2ycOMp6141W02GuoQXjSxiF";
            $response = htmlspecialchars ($_POST ['g-recaptcha-response']);
            $remoteip = $_SERVER['REMOTE _ADDR'];
            $request = "https://www.google.com/recaptcha/api/siteverify?secret-$secret&response-$response&remoteip-$remoteip";

            $get = file_get_contents($request);
            $decode = json_decode($get,true);

            if($decode["success "])
            echo
            "Ok";
            else echo "Error"!

    }

    <script src="https://www.google.com/recaptcha/api.js"></script>




<button type="submit"
 class="g-recaptcha" 
        data-sitekey="6Le1EM0mAAAAAODV9Yj22QIML1aeTJhY40hM4T3V" 
        data-callback='onSubmit' 
        data-action='submit'>Submit</button>


        <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
    ?>  

