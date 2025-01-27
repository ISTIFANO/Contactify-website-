<?php


class Aleart{


    public function Aleartmsg($type, $message) {
        return '<div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">
                  <strong>' . $message . '</strong>
                  <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                </div>';
      }






} 



















?>