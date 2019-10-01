<?php
class Mahasiswa_model extends CI_Model
{
   public function getALlMahasiswa()
   {
      return $query = $this->db->get('mahasiswa')->result_array();
   }

   public function tambahDataMahasiswa()
   {
      $data = [
         "nama" => htmlspecialchars($this->input->post('nama', true)),
         "npm" => htmlspecialchars($this->input->post('npm', true)),
         "email" => htmlspecialchars($this->input->post('email', true)),
         "jurusan" => $this->input->post('jurusan', true)
      ];
      $this->db->insert('mahasiswa', $data);
   }

   public function hapusDataMahasiswa($id)
   {
      $this->db->delete('mahasiswa', ['id' => $id]);
   }

   public function getMahasiswaById($id)
   {
      return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
   }

   public function ubahDataMahasiswa()
   {
      $data = [
         "nama" => htmlspecialchars($this->input->post('nama', true)),
         "npm" => htmlspecialchars($this->input->post('npm', true)),
         "email" => htmlspecialchars($this->input->post('email', true)),
         "jurusan" => $this->input->post('jurusan', true)
      ];
      $this->db->where('id', $this->input->post('id'));
      $this->db->update('mahasiswa', $data);
   }

   public function cariDataMahasiswa()
   {
      $keyword = $this->input->post('keyword', true);

      $this->db->like('nama', $keyword);
      $this->db->or_like('jurusan', $keyword);
      $this->db->or_like('npm', $keyword);
      return $this->db->get('mahasiswa')->result_array();
   }
}
