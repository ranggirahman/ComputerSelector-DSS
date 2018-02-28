										<?php		    								
		    								$i = 0;
		    								$cpu = mysqli_query($koneksi,$sr['psyntax']);
								      		echo "<tr><td></td><td></td>";
									      		while(mysqli_fetch_array($cpu,MYSQLI_BOTH)){
									      			$i++;
								      				echo "<th width='200px'><h2><span class='badge badge-light'>".$i."</span><h2></th>"; 							      		
									      		}
								      		echo "</tr>";

								      		if($i <= 5){
								      			$cpu = mysqli_query($koneksi,$sr['psyntax']);
										      	echo "<tr><td class='bg-light' rowspan='4' width='50px'><img src='img/hprocessor.png' style='max-height: 8%; and width: auto'></td><td>Name</td>";
										      		while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
										      			?>
									      				<td><?php echo $key['cpuname']; ?></td>							      												      			
										      		<?php								      		
										      		}
										      	echo "</tr>";
										      	echo "<tr><td>Score</td>";
										      		$cpu = mysqli_query($koneksi,$sr['psyntax']);
										      		while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
										      			?>
									      				<td><?php echo $key['cpuscore']; ?></td>							      												      			
										      		<?php								      		
										      		}
										      	echo "</tr>";
										      	echo "<tr><td>Price</td>";
										      		$cpu = mysqli_query($koneksi,$sr['psyntax']);
										      		while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
										      			?>
									      				<td>$<?php echo $key['cpuprice']; ?></td>							      												      			
										      		<?php								      		
										      		}
										      	echo "</tr>";
										      	echo "<tr><td></td>";
										      		$cpu = mysqli_query($koneksi,$sr['psyntax']);
										      		while($key = mysqli_fetch_array($cpu,MYSQLI_BOTH)){
										      			?>
									      				<td>
									      					<a class="btn btn-light btn-sm" href="https://www.google.com/search?q=<?php echo $key['cpuname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a>
									      					<a class="btn btn-light btn-sm" href="<?php echo $st['query'].$key['cpuname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">shopping_cart</i></span></a>
									      				</td>							      												      			
										      		<?php								      		
										      		}
									      		echo "</tr>";
								      		}
								    		
					    				?>
					    				
					    				<tr><td colspan="7"><br></td></tr>

		    							<?php
		    								$vga = mysqli_query($koneksi,$sr['vsyntax']);
									      	echo "<tr><td class='bg-light' rowspan='4' width='50px'><img src='img/hvga.png' style='max-height: 8%; and width: auto'></td><td>Name</td>";
									      		while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
									      			?>
								      				<td><?php echo $key['vganame']; ?></td>							      												      			
									      		<?php								      		
									      		}
								      		echo "</tr>";
									      	echo "<tr><td>Score</td>";
									      		$vga = mysqli_query($koneksi,$sr['vsyntax']);
									      		while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
									      			?>
								      				<td><?php echo $key['vgascore']; ?></td>							      												      			
									      		<?php								      		
									      		}
									      		echo "</tr>";
									      		echo "<tr><td>Price</td>";
									      		$vga = mysqli_query($koneksi,$sr['vsyntax']);
									      		while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
									      			?>
								      				<td>$<?php echo $key['vgaprice']; ?></td>							      												      			
									      		<?php								      		
									      		}
									      		echo "</tr>";
									      		echo "<tr><td></td>";
									      		$vga = mysqli_query($koneksi,$sr['vsyntax']);
									      		while($key = mysqli_fetch_array($vga,MYSQLI_BOTH)){
									      			?>
								      				<td>
								      					<a class="btn btn-light btn-sm" href="https://www.google.com/search?q=<?php echo $key['vganame'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a>
								      					<a class="btn btn-light btn-sm" href="<?php echo $st['query'].$key['vganame'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">shopping_cart</i></span></a>
								      				</td>							      												      			
									      		<?php								      		
									      		}
								      		echo "</tr>";
					    				?>

					    				<tr><td colspan="7"><br></td></tr>

		    							<?php
							    			$ssd = mysqli_query($koneksi,$sr['ssyntax']);
								      		echo "<tr><td class='bg-light' rowspan='4' width='50px'><img src='img/hssd.png' style='max-height: 8%; and width: auto'></td><td>Name</td>";
									      		while($key = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
									      			?>
								      				<td><?php echo $key['ssdname']; ?></td>							      												      			
									      		<?php								      		
									      		}
									      		echo "</tr>";
									      		echo "<tr><td>Score</td>";
									      		$ssd = mysqli_query($koneksi,$sr['ssyntax']);
									      		while($key = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
									      			?>
								      				<td><?php echo $key['ssdscore']; ?></td>							      												      			
									      		<?php								      		
									      		}
									      		echo "</tr>";
									      		echo "<tr><td>Price</td>";
									      		$ssd = mysqli_query($koneksi,$sr['ssyntax']);
									      		while($key = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
									      			?>
								      				<td>$<?php echo $key['ssdprice']; ?></td>							      												      			
									      		<?php								      		
									      		}
									      		echo "</tr>";
									      		echo "<tr><td></td>";
									      		$ssd = mysqli_query($koneksi,$sr['ssyntax']);
									      		while($key = mysqli_fetch_array($ssd,MYSQLI_BOTH)){
									      			?>
								      				<td>
								      					<a class="btn btn-light btn-sm" href="https://www.google.com/search?q=<?php echo $key['ssdname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">open_in_new</i></span></a>
								      					<a class="btn btn-light btn-sm" href="<?php echo $st['query'].$key['ssdname'] ?>" target="_blank" role="button"><span aria-hidden="true"><i class="material-icons" style="font-size: 16px;">shopping_cart</i></span></a>
								      				</td>							      												      			
									      		<?php								      		
									      		}
								      		echo "</tr>";
					    				?>

					    				<tr><td colspan="7"><br></td></tr>