<?php
    class Order extends Client{
        protected $status, $date;

        public function vueOrder(): string
        {
            return "</BR> Date: " . $this->date . ",</BR> Status: " . $this->status . "</BR></BR>";
        }
    }
?>