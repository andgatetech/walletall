<?php
/**
 * Created by PhpStorm.
 * User: alam
 * Date: 12/2/18
 * Time: 8:08 PM
 */

namespace App\Repositories;

interface RepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function show($id);

}