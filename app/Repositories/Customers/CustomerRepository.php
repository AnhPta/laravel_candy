<?php

namespace App\Repositories\Customers;

use App\Repositories\BaseRepository;

class CustomerRepository extends BaseRepository
{
    /**
     * Customer model.
     * @var Model
     */
    protected $model;

    /**
     * CustomerRepository constructor.
     * @param Customer $Customer
     */
    public function __construct(Customer $customer)
    {
        $this->model = $customer;
    }

    /**
     * Lấy tất cả giá trị hợp lệ của trạng thái
     * @return string
     */
    public function getAllStatus()
    {
        return implode(',', Customer::ALL_STATUS);
    }

    /**
     * Lưu thông tin 1 khách hàng mới
     * @param  array $data
     * @return Eloquent
     */
    public function store($data)
    {
        return parent::store($data);
    }

    /**
     * Cập nhật thông tin 1 khách hàng
     * @param  integer $id  ID chi nhánh
     * @return bool
     */
    public function update($id, $data, $excepts = [], $only = [])
    {
        return parent::update($id, $data);
    }

    /**
     * Thay đổi trạng thái
     * @param  integer $id ID
     * @return [type]      [description]
     */
    public function changeStatus($id)
    {
        $Customer = parent::getById($id);
        if ($Customer->status == Customer::ENABLE) {
            return parent::update($id, ['status' => Customer::DISABLE]);
        } else {
            return parent::update($id, ['status' => Customer::ENABLE]);
        }
    }

    /**
     * Thay đổi loại chi nhánh
     * @param  integer $id id
     * @return [type]     [description]
     */
    public function changeCustomerMain($id)
    {
        $Customer = parent::getById($id);
        if ($Customer->type == Customer::NOT_MAIN) {
            $this->updateCustomerMainOld();
            return parent::update($id, ['type' => Customer::MAIN]);
        } else {
            return $Customer;
        }
    }

    // public function upload($file, $resize = true)
    // {
    //     $image_name = date('Y_m_d') ."_". md5($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
    //     $upload = Image::make($file->getRealPath())->save($this->getUploadImagePath($image_name));
    //     return $this->uploadSuccess($image_name);
    // }

    // protected function getImagePath($img)
    // {
    //     return app('url')->asset($this->model->imgPath . '/' . $img);
    // }

    // protected function getUploadImagePath($img)
    // {
    //     storage_path($this->model->uploadPath . '/' . $img);
    // }

    // protected function uploadSuccess($name)
    // {
    //     return [
    //         'code'    => 1,
    //         'message' => 'success',
    //         'data'    => [
    //             'name' => $name,
    //             'path' => $this->getImagePath($name)
    //         ]
    //     ];
    // }
}
