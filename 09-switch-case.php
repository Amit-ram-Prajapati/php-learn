<?php $age = 4;

switch ($age) {
    case 0:
        echo "You are a baby";
        break;
    case 13:
        echo "You are a teenager";
        break;
    case 18:
        echo "You are an adult";
        break;
    case 65:
        echo "You are a senior citizen";
        break;
    default:
        echo "You are of unknown age";
};

// to define a range of values, we can use the switch statement with true as the expression and use conditions in the case statements
switch (true) {
    case ($age < 13):
        echo "You are a child / baby";
        break;
    case ($age >= 13 && $age < 18):
        echo "You are a teenager";
        break;
    case ($age >= 18 && $age < 65):
        echo "You are an adult";
        break;
    case ($age >= 65):
        echo "You are a senior citizen";
        break;
    default:
        echo "You are of unknown age";
};
