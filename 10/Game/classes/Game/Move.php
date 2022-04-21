<?php

namespace Game;

trait Move {

    public function Up() {
        if (!$this->CheckWin() && $this->car->Acsses()) {
            $this->car->Up();
            $this->status();
            $this->positiveHelp();
        }
    }

    public function Down() {
        if (!$this->CheckWin() && $this->car->Acsses()) {
            $this->car->Down();
            $this->status();
            $this->negativeHelp();
        }
    }

    public function Left() {
        if (!$this->CheckWin() && $this->car->Acsses()) {
            $this->car->Left();
            $this->status();
            $this->negativeHelp();
        }
    }

    public function Right() {
        if (!$this->CheckWin() && $this->car->Acsses()) {
            $this->car->Right();
            $this->status();
            $this->positiveHelp();
        }
    }
}