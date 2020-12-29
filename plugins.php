<?php

return function ($context, $inject) {
    $gql = $this->config["gql"];

    $inject("gql", new GQL\Client($gql["baseURL"]));
};
