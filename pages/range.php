<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">RANGE KELAYAKAN</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Range Nilai Kelayakan UKM
                      </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><table width="50%" border="1" align="center">
                                <tr>
                                  <td width="201" height="30"><div align="left"><strong> Nilai Kelayakan UKM</strong></div></td>
                                  <td width="99">&nbsp;</td>
                                </tr>
                                <?php
						   $a=mysql_query("select * from range"); 
					  $no=1;
					  while($b=mysql_fetch_array($a))
					  {
					  ?>
                                <tr>
                                  <td height="30"><div align="left"><?php echo"$b[0]"; ?></div></td>
                                  <td><a href="admin.php?page=editrange&id=<?php echo"$b[0]"; ?>" >Edit</a></td>
                                </tr>
                                <?php
					  $no++;
					  }
					  ?>
                              </table></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="234">&nbsp;</td>
                              <td width="646">&nbsp;</td>
                              <td width="130">&nbsp;</td>
                            </tr>
                          </table>
                          <p>&nbsp;</p>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            
            <!-- /.row -->
            
            <!-- /.row -->
        </div>