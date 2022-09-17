<?php

$payload = new PayloadBuilder();

$payload->build(new Discount(),new Event(), Type::Create);

$payload->build(
    discount: new Discount(),
    event: new Event(),
    type: Type::Create
);