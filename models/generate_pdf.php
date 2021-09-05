<?php
    require '../../dependencies/pdfcrowd/pdfcrowd.php';
?>
<?php
    function getPdf($html_string, $filepath, $id, $doctype){
        try
        {
            $client = new \Pdfcrowd\HtmlToPdfClient(getenv('PDFCROWD_USER'), getenv('PDFCROWD_API'));
            $filename=$id."_".uniqid()."_".$doctype.".pdf";
            $pdf=$client->convertStringToFile($html_string, $filepath.$filename);
            return $filename;
        }
        catch(\Pdfcrowd\Error $why)
        {
            //DO NOTHING
        }
    }
?>