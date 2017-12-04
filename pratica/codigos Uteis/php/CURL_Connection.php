 $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $urlCurl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36" );

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        $resposta = curl_exec($ch);
        $info= curl_getinfo($ch);
        curl_close($ch);
        $dados = json_decode($resposta,true);

        $token = $dados['token'];



        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://api.sistemagiv.com.br/auditoria/getDetalhesRegistro/0/".$hash);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-Api-Token: '.$token));
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36" );

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        $resposta = curl_exec($ch);
        $info= curl_getinfo($ch);
        curl_close($ch);
