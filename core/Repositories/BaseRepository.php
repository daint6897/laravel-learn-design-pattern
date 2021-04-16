<?php

namespace Core\Repositories;


class BaseRepository implements BaseRepositoryContract
{
    protected $model;

    public function paginate()
    {
        $instance = $this->getNewInstance();
        return $instance->paginate(10);
    }

    public function find($id)
    {
        $instance = $this->getNewInstance();
        return $instance->findOrFail($id);
    }

    public function store($data)
    {
        $instance = $this->getNewInstance();
        return $instance->create($data);
    }

    public function update($id, $data)
    {
        $model = $this->find($id);
        return $model->update($data);
    }

    public function destroy($id)
    {
        $model = $this->find($id);
        return $model->destroy($id);
    }
    protected function getNewInstance()
    {
        $model = $this->model;
        return new $model;
    }
}
