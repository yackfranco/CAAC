<?php

interface IInventario{

  public function select();

  public function selectById($id);

  public function insert(apiario $apiario);

  public function update(apiario $apiario);

  public function delete($id, $logico = true);
}
