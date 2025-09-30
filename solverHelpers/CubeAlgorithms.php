<?php

class CubeAlgorithms {
    // BASICS
    const SEXY_MOVES = "R U R' U'";
    const ELEVATOR = "R U R' U' R U R' U' R U R' U'";
    const THREE_MOVES = "R U R'";
    const EDGE_CONTROL = "R' F R F'";
    const LEFT_BELGIUM = "U' L' U L U F U' F'";
    const RIGHT_BELGIUM = "U R U' R' U' F' U F";
    const FRIENDS = "R U' L' U R' U' L U";

    // OLLs
    const SUNE_ORIENT = "R U R' U R U2 R'";
    const ANTISUNE_ORIENT = "R U2 R' U' R U' R'";
    const U_ORIENT = "R2 D R' U2 R D' R' U2 R'";
    const T_ORIENT = "Rw U R' U' L' U R U' x'";
    const L_ORIENT = "Lw' U R D' R' U' R D x'";
    const H_ORIENT = "F R U R' U' R U R' U' R U R' U' F'";
    const PI_ORIENT = "R U2 R2 U' R2 U' R2 U2 R";

    // PLLs
    const T_PERM = "R U R' U' R' F R2 U' R' U' R U R' F'";
    const J_PERM = "R U R' F' R U R' U' R' F R2 U' R' U'";
    const Y_PERM = "F R U' R' U' R U R' F' R U R' U' R' F R F'";
}

?>