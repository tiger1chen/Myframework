<?php
namespace Core;
interface IDatabase{
    function connect();
    function excute($sql);
    function close();
}