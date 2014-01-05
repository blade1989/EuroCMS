    <?php
    /*
    * __construct($email) takes an email address to check
    *
    * simpleCheck() Tests to see if an email address is formatted correctly
    * and the domain it belongs to exists, such as: gmail.com, yahoo.com
    *
    * strongCheck() Tests to see if an email address is valid and that the
    * email actually accepts emails by actually connecting to the server.
    * Note: strongCheck() can be slow
    */
    class EmailValidator{
    private $email = "";
    private $mxhost = "";
    public function __construct($email){
    $this->email = $email;
    $this->mxhost = $this->getMXHost();
    }
    public function strongCheck(){
    if(filter_var($this->email, FILTER_VALIDATE_EMAIL) && $this->fConnect()){
    return true;
    }
    return false;
    }
    public function simpleCheck(){
    if(filter_var($this->email, FILTER_VALIDATE_EMAIL) && $this->getMXHost()){
    return true;
    }
    return false;
    }
    private function fConnect(){
    $fp = @fsockopen($this->mxhost, 25, $errno, $errstr, 5);
    $ms_resp = "";
    $b_server_found = false;
    if($fp){
    $ms_resp .= $this->send_command($fp, "HELO hi");
    $ms_resp .= $this->send_command($fp, "MAIL FROM:<ryan @ryannaddy.com>");
    $rcpt_text = $this->send_command($fp, "RCPT TO:< {$this->email}>");
    $ms_resp .= $rcpt_text;
    if(substr($rcpt_text, 0, 3) == "250"){
    $b_server_found = true;
    }
    $ms_resp .= $this->send_command($fp, "QUIT");
    fclose($fp);
    }
    return $b_server_found;
    }
    private function getMXHost(){
    if(!empty($this->mxhost)){
    return $this->mxhost;
    }
    list($user, $domain) = explode("@", $this->email);
    getmxrr($domain, $hosts, $weights);
    $priority = mt_getrandmax();
    $key = 0;
    if(empty($weights)){
    return false;
    }
    foreach($weights as $k => $v){
    if($v < $priority){
    $key = $k;
    $priority = $v;
    }
    }
    return $hosts[$key];
    }
    private function send_command($fp, $out){
    fwrite($fp, $out . "rn");
    return $this->get_data($fp);
    }
    private function get_data($fp){
    $s = "";
    stream_set_timeout($fp, 2);
    for($i = 0; $i < 2; $i++){
    $s .=fgets($fp, 1024);
    }
    return $s;
    }
    }
    $hosts = array(
    "asdfsfd@adsfasdasd.com",
    "asdfsfd@google.com",
    "asdf!sfd@gmail.com",
    "asdfsfd@yahoo.com",
    "asd^sfd@44n5o$.com",
    "dddasdf@gamil.com"
    );
    foreach($hosts as $host){
    echo $host . "n";
    $em = new EmailValidator($host);
    echo " ";
    var_dump($em->simpleCheck());
    echo " ";
    var_dump($em->strongCheck());
    }
    ?>