class Pico_Draft {

    public function request_url(&amp;$url)
    {
        // change this to something that is not easily guessed!!!
        // you will need this URL to set up a webhook on Draft settings page
        if ('koquaycterc8' == $url) {
            // getting the payload, decoding it and saving to file system inside content dir
            if ($_POST['payload']) {
                // we have a request from Draft, let's save it to file
                $payload = json_decode($_POST['payload']);
                $fileName = strtolower($payload-&gt;name) . CONTENT_EXT;
                @file_put_contents(CONTENT_DIR . $fileName, $payload-&gt;content);
            }
            exit; // stop everything!
        }
    }
}
