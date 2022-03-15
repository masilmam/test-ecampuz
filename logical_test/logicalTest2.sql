SELECT mhs.mhs_nama, mk.mk_kode, mk.mk_nama, nilai.nilai FROM tb_mahasiswa_nilai nilai
JOIN tb_mahasiswa mhs ON mhs.mhs_id = nilai.mhs_id
JOIN tb_matakuliah mk ON mk.mk_id = nilai.mk_id
WHERE mk.mk_kode = 'MK303'
ORDER BY nilai.nilai DESC
LIMIT 1;