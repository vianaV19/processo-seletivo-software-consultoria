<?php

function Seculoano(int $ano) {
    return ceil($ano / 100);
}

echo Seculoano(1905);