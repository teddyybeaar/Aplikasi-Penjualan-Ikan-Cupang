<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Pesan</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; foreach($kontak->result() as  $a){?>
                                        <tr>
                                        <td><?php echo $i;?></td>
					                    <td><?php echo $a->nama;?></td>
                                        <td><?php echo $a->email;?></td>
                                        <td><?php echo $a->pesan;?></td>
                                        <td><?php echo $a->created;?></td>
                                        </tr>
                                        <?php $i++; }?>
                                        </tbody>
                                </table>
                                