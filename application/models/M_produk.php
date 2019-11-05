<?php

class M_produk extends CI_Model
{

    private $_table = 'tb_produk';

    public $id_produk;
    public $id_kategori;
    public $id_admin;
    public $nama_produk;
    public $desc_produk;
    public $harga_produk;
    public $img_produk;
    public $api_produk;

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama Produk',
                'rules' => 'required|trim'
            ],
            [
                'field' => 'harga',
                'label' => 'Harga Produk',
                'rules' => 'required|trim|numeric'
            ],
            [
                'field' => 'desc',
                'label' => 'Deskripsi Produk',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_produk' => $id])->row();
    }

    public function update()
    {
        $post =  $this->input->post();
        $this->id_produk = $post['id'];
        $this->id_kategori = $post['kategori'];
        $this->id_admin = $post['admin'];
        $this->nama_produk = $post['nama'];
        $this->harga_produk = $post['harga'];
        $this->desc_produk = $post['desc'];
        $this->api_produk = 'null';

        if (!empty($_FILES["img"]["name"])) {
            $this->img_produk = $this->_uploadImage();
        } else {
            $this->img_produk = $post["old_image"];
        }
        // $this->description = $post["description"];
        $this->db->update($this->_table, $this, array('id_produk' => $post['id']));
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kategori = $post['kategori'];
        $this->id_admin = $post['admin'];
        $this->nama_produk = $post['nama'];
        $this->harga_produk = $post['harga'];
        $this->img_produk = $this->_uploadImage();
        $this->desc_produk = $post['desc'];
        $this->api_produk = 'null';
        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/produk/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = date("d-m-Y-His") . str_replace(" ", "_", $this->nama_produk);
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('img')) {
            return $this->upload->data("file_name");
        }

        print_r($this->upload->display_errors());
        // return "default.jpg";
    }

    public function delete($id)
    {
        $this->_deleteimage($id);
        return $this->db->delete($this->_table, array('id_produk' => $id));
    }

    public function _deleteimage($id)
    {
        $produk = $this->getById($id);
        if ($produk->img_produk != 'default.jpg') {
            $filename = explode(".", $produk->img_produk)[0];
            return array_map('unlink', glob(FCPATH . "upload/product/$filename"));
        }
    }
}
