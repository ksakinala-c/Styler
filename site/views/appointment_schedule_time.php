<div class="apt-time-apnd-div">
					<div class="btn-group select-apt-time" data-toggle="buttons">
					<?php foreach($responseData as $timeInfos) { 
						$keyId=$timeInfos->time_of_day;
						$timeInfo=$timeInfos->start_time;
					?>
						<label class="btn btn-default radio-grp-apt-label apt-lbl-cls<?php echo $keyId; ?>">
						<input class="radio-grp-apt apt-cls<?php echo $keyId; ?>" type="radio" id="apt<?php echo $keyId; ?>" name="start_time" value="<?php echo $timeInfo; ?>" /> <?php echo $hoursRange[$timeInfo]; ?>
						</label> 
					<?php } ?>
					</div>
				</div>