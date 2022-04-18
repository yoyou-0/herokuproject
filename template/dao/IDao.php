<?php

interface IDao {
    function delete($o);
    function findAll();
    function findById($id);
}
