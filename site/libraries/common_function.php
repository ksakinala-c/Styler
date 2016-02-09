<?php
class MY_common_function {
	public $state_list;
	public $card_list;
	public $month_list;	
	
	function MY_common_function() {	
	
	$this->section_id_emp = array(
			'1'		=> '2',
			'3'		=> '3',
			'6'		=> '4',				
			'12'	=> '5',
			);

	$this->section_id_job = array(
			'1'		=> '6',
			'5'		=> '7',
			'10'	=> '8',				
			'20'	=> '9',
			'250'	=> '10',
			'500'	=> '11',
			'1000'	=> '12'				
			);
	
	$this->rbt_01_resume_AP = array(
					'1M' => '539.95',				//'539.95',
					'3M' => '1259.95',
					'6M' => '2339.95',
					'12M' => '4139.95'
					);							
	$this->rbt_02_jobs_PP = array(
					'1J' => '49.95',
					'5J' => '189.95',
					'10J' => '349.95',
					'20J' => '494.95',
					'250J' => '624.95',
					'500J' => '1099.95',
					'1000J' => '1999.95'
					);												

	
	$this->occ_category = array(
    	                '' => 'Select',         
                        'Technology' => 1,
                        'Sales' => 2,
                        'Finance' => 3,
                        'Operations' => 4,
                        'Marketing' => 5,
                        'Medical' => 6, 
                        'Human Resources' => 7, 
                        'Legal' => 8, 
                        'Other' => 9
						);
		
	$this->occ_category_rev = array(
                        '' => 'Select',         
                        '1' => 'Technology',
                        '2' => 'Sales',
                        '3' => 'Finance',
                        '4' => 'Operations',
                        '5' => 'Marketing',
                        '6' => 'Medical', 
                        '7' => 'Human Resources', 
                        '8' => 'Legal', 
                        '9' => 'Other'
						);

						
	$this->occ_category_rev_01 = array(
                        '1' => 'Technology',
                        '2' => 'Sales',
                        '3' => 'Finance',
                        '4' => 'Operations',
                        '5' => 'Marketing',
                        '6' => 'Medical', 
                        '7' => 'Human Resources', 
                        '8' => 'Legal',
						'9' => 'Microsoft',
						'10'=> 'Apple',
						'11'=> 'Yahoo',
						'12'=> 'AT&amp;T', 
						'13'=> 'Citrix',
						'14'=> 'Capgemini',
						'15'=> 'IBM',
						'16'=> 'Schlumberger'						
						);	
	
	$this->career_level = array(
                   '' => 'Select',
                   'Staff' => 1,
                   'Manager' => 2,
                   'Senior Manager' => 3,
                   'Director' => 4,
                   'Vice President' => 5,
                   'C-level' => 6,
				   'Fresher' => 7         				   
					);

	$this->career_level_rev = array(
                   ''  => 'Select',				            
				   '0' => 'Select',
                   '1' => 'Staff',
                   '2' => 'Manager',
                   '3' => 'Senior Manager',
                   '4' => 'Director',
                   '5' => 'Vice President',
                   '6' => 'C-level',
				   '7' => 'Fresher'
				);

	$this->month_text = array(
				'01' => 'Jan',
				'02' => 'Feb',
				'03' => 'March',
				'04' => 'April',
				'05' => 'May',
				'06' => 'June',
				'07' => 'July',
				'08' => 'Aug',
				'09' => 'Sep',
				'10' => 'Oct',
				'11' => 'Nov',
				'12' => 'Dec',
				);
	
	$this->pos_type = array(
                        '' => 'Select',         
                        '1' => 'Full-Time',
						'2' => 'Part-Time'
						);						

	$this->occ_cat = array(
                        '' => 'Select',         
                        'Technology' => 'Technology',
                        'Sales' => 'Sales',
                        'Finance' => 'Finance',
                        'Operations' => 'Operations',
                        'Marketing' => 'Marketing',
                        'Medical' => 'Medical &amp; Science', 
                        'Human Resources' => 'Human Resources', 
                        'Legal' => 'Legal', 
                        'Other' => 'Other'
						);

	$this->occ_cat2 = array(
                        '' => 'Select Occupational Category',         
                        'Technology' => 'Technology',
                        'Sales' => 'Sales',
                        'Finance' => 'Finance',
                        'Operations' => 'Operations',
                        'Marketing' => 'Marketing',
                        'Medical' => 'Medical &amp; Science', 
                        'Human Resources' => 'Human Resources', 
                        'Legal' => 'Legal', 
                        'Other' => 'Other'
						);

 //Added by Puru
	$this->qual = array(	
						"" => "Select",
                       "Some High School Coursework" => 'Some High School Coursework',              			                       
                        "High School or Equivalent" => 'High School or Equivalent',
                        "Certification" => 'Certification',
                        "Vocational" => 'Vocational',
                        "Some College Coursework" => 'Some College Coursework',
                        "College Diploma" => 'College Diploma',
                        "Bachelors Degree" => 'Bachelors Degree',
                        "Masters Degree" => 'Masters Degree',
                        "Doctorate Degree" => 'Doctorate Degree',
                        "Professional" => 'Professional',
                        "Other" =>'Other'                              
                      );

		//Added by Puru
		$this->level = array(
                        '' => 'Select', 
						'Fresher' => 'Fresher',        
                        'Staff' => 'Staff',
                        'Manager' => 'Manager',
                        'Senior Manager' => 'Senior Manager',
                        'Director' => 'Director',
                        'Vice President' => 'Vice President',
                        'C-level' => 'C-level'
					);
					
		$this->level2 = array(
                        '' => 'Select Your Career Level',         
                        'Staff' => 'Staff',
                        'Manager' => 'Manager',
                        'Senior Manager' => 'Senior Manager',
                        'Director' => 'Director',
                        'Vice President' => 'Vice President',
                        'C-level' => 'C-level'
					);							

		//Added by Puru
		$this->school_status = array(
                        'Undergraduate' => 'Undergraduate',         
                        'Grad Student' => 'Grad Student',
                        'Alumnus/Alumna' => 'Alumnus/Alumna',
                        'Faculty' => 'Faculty',
                        'Staff' => 'Staff'
					);
					
		//Added by Puru
		$this->institute = array(
                    	"" => 'Select',     
                        "Alabama State University (AL)" => 'Alabama State University (AL)',
                        "Arizona State University (AZ)" => 'Arizona State University (AZ)',
                        "Boston University (MA)" => 'Boston University (MA)',
                        "California Institute of the Arts (CA)" => 'California Institute of the Arts (CA)',
                        "Harvard University (MA)" => 'Harvard University (MA)</option>',
                        "University of Florida, Fl" => 'University of Florida, Fl',
                        "University of Missouri Kansas City" => 'University of Missouri Kansas City',
                        "Other" => 'Other'
						);


		//Added by Puru
		$this->year = array(
		               	'' => 'Years',
						'0' => '0',
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6',
                        '7' => '7',
                        '8' => '8',
                        '9' => '9',
                        '10' => '10',
                        '11' => '11',
                        '12' => '12',
                        '13' => '13',
                        '14' => '14',
                        '15' => '15',
                        '16' => '16',
                        '17' => '17',
                        '18' => '18',
                        '19' => '19',
                        '20' => '20',
                        '21' => '21',
                        '22' => '22',
                        '23' => '23',
                        '24' => '24',
                        '25' => '25',
                        '26' => '26',
                        '27' => '27',
                        '28' => '28',
                        '29' => '29',
                        '30' => '30',
                        '31' => '31',
                        '32' => '32',
                        '33' => '33',
                        '34' => '34',
                        '35' => '35',
                        '36' => '36',
                        '37' => '37',
                        '38' => '38',
                        '39' => '39',
                        '40' => '40',
                        '41' => '41',
                        '42' => '42',
                        '43' => '43',
                        '44' => '44',
                        '45+' => '45+'
			);

		$this->months = array(
		               	'' => 'Months',
						'0' => '0',
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6',
                        '7' => '7',
                        '8' => '8',
                        '9' => '9',
                        '10' => '10',
                        '11' => '11'
						);
						
			$this->pass_year = array(
                    	"" => 'Select',
                        '1970' => '1970',
                        '1971' => '1971',
                        '1972' => '1972',
                        '1973' => '1973',
                        '1974' => '1974',
                        '1975' => '1975',
                        '1976' => '1976',
                        '1977' => '1977',
                        '1978' => '1978',
                        '1979' => '1979',
                        '1980' => '1980',
                        '1981' => '1981',
                        '1982' => '1982',
                        '1983' => '1983',
                        '1984' => '1984',
                        '1985' => '1985',
                        '1986' => '1986',
                        '1987' => '1987',
                        '1988' => '1988',
                        '1989' => '1989',
                        '1990' => '1990',
                        '1991' => '1991',
                        '1992' => '1992',
                        '1993' => '1993',
                        '1994' => '1994',
                        '1995' => '1995',
                        '1996' => '1996',
                        '1997' => '1997',
                        '1998' => '1998',
                        '1999' => '1999',
                        '2000' => '2000',
                        '2001' => '2001',
                        '2002' => '2002',
                        '2003' => '2003',
                        '2004' => '2004',
                        '2005' => '2005',
                        '2006' => '2006',
                        '2007' => '2007',
                        '2008' => '2008',
                        '2009' => '2009'
						);
						
		$this->salary = array(
                    	"" => "Select",
                        "&lt; $25,000" => "&lt; $25,000",
                        "$25,001 - $50,000" => "$25,001 - $50,000",
                        "$50,001 - $100,000" => "$50,001 - $100,000",
                        "$100,001 - $200,000" => "$100,001 - $200,000", 
                        "&gt; $200,001" => "&gt; $200,001"
						);
						
		$this->salary2 = array(
                    	"" => "Select Your Salary Range",
                        "&lt; $25,000" => "&lt; $25,000",
                        "$25,001 - $50,000" => "$25,001 - $50,000",
                        "$50,001 - $100,000" => "$50,001 - $100,000",
                        "$100,001 - $200,000" => "$100,001 - $200,000", 
                        "&gt; $200,001" => "&gt; $200,001"
						);														

		$this->sal_num = array(
                    	"" => "Select",
                        "&lt; $25,000" => 1,
                        "$25,001 - $50,000" => 2,
                        "$50,001 - $100,000" => 3,
                        "$100,001 - $200,000" => 4, 
                        "&gt; $200,001" => 5
						);

		$this->sal_num_rev = array(
                    	"" => "Select",
						"0"=> "Select",
                        "1" => "&lt; $25,000",
                        "2" => "$25,001 - $50,000",
                        "3" => "$50,001 - $100,000",
                        "4" => "$100,001 - $200,000", 
                        "5" => "&gt; $200,001"
						);
	
		$this->month_list = array('01'=>"January",  
							'02'=>"February",  
							'03'=>"March",  
							'04'=>"April",  
							'05'=>"May",  
							'06'=>"June",  
							'07'=>"July",  
							'08'=>"August",  
							'09'=>"September",  
							'10'=>"October",  
							'11'=>"November",  
							'12'=>"December");  		
		//Added by Deepak					
		$this->desire_campaign_list	= array(
									 ""						=> "Select",
									"Immediately"			=> "Immediately",
									"Within This Month"		=> "Within This Month",
									"Within Three Months"	=> "Within Three Months",
									"More Than Three Months" => "More Than Three Months"
									);
									
		$this->advertise_industry_list	= array(
											   ""						=> "Select",
											   "Advertising Agency"	 	=> "Advertising Agency",
											   "Alcohol"				=> "Alcohol",
											   "Automotive"				=> "Automotive",
											   "Direct Response"		=> "Direct Response",
											   "Education"				=> "Education",
											   "Entertainment"			=> "Entertainment",
											   "Financial"				=> "Financial",
											   "Gaming"					=> "Gaming",
											   "Media"					=> "Media",
											   "Public Services"		=> "Public Services",
											   "Restaurants"			=> "Restaurants",
											   "Retail"					=> "Retail",
											   "Technology"				=> "Technology",
											   "Telecommunications"		=> "Telecommunications",
											   "Travel"					=> "Travel",
											   "Other"					=> "Other"	
												);							
		//Added by Deepak	
		$this->banner_width		= array(
										'168'		=> "168px",					
										'179'		=>	"179px",
										'190'		=>	"190px",
										'200'		=>	"200px",
										'211'		=>	"211px",
										'220'		=>	"220px",
										'244'		=>	"244px",	
										'250'		=>	"250px",
										'255'		=>	"255px",	
										'300'		=> 	"300px"
					 				);
					 				
		$this->banner_height		= array(
									 '100'		=> 	"100px", 
									 '150'		=>	"150px",							
									 '175'		=>	"175px",							
									 '200'		=>	"200px",							
									 '250'		=>	"250px",							
									 '300'		=>	"300px"
					 			);
		

		$this->banner_page_300		=	array('Home','Jobs','Education','About Us','FAQ','Contact Us','Sitemap', 'Terms & Conditions','More Listing','Search Listing','Our Blog','Privacy Policy','Friends Network','Online Dating','Online Photo Sharing','Bug Report','Advertise','Dating Registration','Photo Details');					 							 			
		$this->banner_page_255		=	array('Photos','Videos');					 							 			
		$this->banner_page_250		=	array('Music');					 							 			
		$this->banner_page_244		=	array('Friends');					 							 			
		$this->banner_page_220		=	array('Competitions','Forums','Beauty');					 							 			
		$this->banner_page_211		=	array('Groups');					 							 			
		$this->banner_page_200		=	array('Home');					 							 			
		$this->banner_page_190		=	array('Dating','Group Forum');					 							 			
		$this->banner_page_179		=	array('Group Details','Events','Education Profile');					 							 			
		$this->banner_page_168		=	array('My Inbox');					 							 			
			
		
		$this->banner_page_name		= array(
									 'Home'					=>		"home", 
									 'Beauty'				=> 		"beauty", 
									 'Forums'				=> 		"forums", 
									 'Friends'				=> 		"friends",
									 'Photos'				=>		"photos",
									 'Music'				=> 		"music",						
									 'Videos'				=> 		"videos",
									 'Jobs'					=> 		"jobs",
									 'Competitions' 		=>		"competitions",
									 'Education'			=> 		"education",
									 'Dating'				=> 		"dating",
									 'Events'				=> 		"events",
									 'Groups'				=> 		"groups",
									 'My Inbox'				=> 		"my_inbox",
									 'More Listing' 		=> 		"more_listing",
									 'About Us' 			=> 		"aboutus",
									 'FAQ' 					=> 		"faq",
									 'Contact Us' 			=> 		"contactus",
									 'Sitemap' 				=> 		"sitemap",
									 'Terms & Conditions' 	=> 		"terms",
									 'Search Listing' 		=> 		"search_listing",
									 'Details Listing' 		=>		"details_listing" ,
									 'Group Details' 		=>		"group_details",
									 'Group Forum' 			=>		"group_forum",
									 'Our Blog'				=>		"our_blog",
									 'Privacy Policy'		=>		"privacy_policy",
									 'Friends Network' 		=>		"friends_network",
									 'Online Dating'		=>		"online_dating",
									 'Online Photo Sharing' =>		"online_photo_sharing",
									 'Bug Report' 			=>		"bug_report",
									 'Advertise'			=>		"advertise",
									 'Dating Registration' 	=>		"dating_registration",
									 'Photo Details' 		=>		"photo_details",
									 'My Inbox' 			=>		"my_inbox",
									 'Education Profile' 	=>		"education_profile"
									);
									
									
									
		$this->banner_size_list		= array(
									 ""				=> "Select",
									 'home'			=> "Home", 
									 'beauty'		=> "Beauty", 
									 'forums'		=> "Forums", 
									 'friends'		=> "Friends",
									 'photos'		=> "Photos",
									 'music'		=> "Music",						
									 'videos'		=> "Videos",
									 'jobs'			=> "Jobs",
									 'competitions' => "Competitions",
									 'education'	=> "Education",
									 'dating'		=> "Dating",
									 'events'		=> "Events",
									 'groups'		=> "Groups",
									 'my_inbox'		=> "My Inbox",
									 'more_listing' => "More Listing",
									 'aboutus' 		=> "About Us",
									 'faq' 			=> "FAQ",
									 'contactus' 	=> "Contact Us",
									 'sitemap' 		=> "Sitemap",
									 'terms' 		=> "Terms & Conditions",
									 'search_listing' => "Search Listing",
									 'details_listing' =>"Details Listing", 
									 'group_details' =>"Group Details",
									 'our_blog'		=>"Our Blog",
									 'privacy_policy' =>"Privacy Policy",
									 'friends_network' =>"Friends Network",
									 'online_dating'	=>"Online Dating",
									 'online_photo_sharing' =>"Online Photo Sharing",
									 'bug_report'	=>"Bug Report",
									 'advertise'	=>"Advertise",
									 'dating_registration' =>"Dating Registration",
									 'photo_details' =>"Photo Details",
									 'my_inbox' =>"My Inbox",
									 'education_profile' =>"Education Profile"
									);
									
		/* $this->home_banner			= array(
									 '01'		=> 	"200px X 199px(Education)", 
									 '02'		=>	"300px X 174px(Voice mail)",							
									 '03'		=> 	"300px X 81px(Jobs)",
									 '04'		=>	"300px X 81px(events details)",
									 '05'		=>	"300px X 81px(competitions)"
									 
					 			);
		*/						
		$this->home_banner			= array(
									 '01'		=> 	"200px X 199px(Education)", 
									 '02'		=>	"300px X 174px(Voice mail)",							
									 '03'		=> 	"300px X 250px(Jobs)"
					 			);
								
		$this->friends_banner		= array(
										 '01'		=> "190px X 214px(Live Musical night)" 
									);
		$this->photos_banner		= array(
										 '01'		=> "254px X 192px(Battle of the Band)", 
										 '02'		=> "255px X 252px(Jobs)"							
									);
		$this->music_banner			= array(
										 '01'		=> "254px X 192px(Battle of the Band)" 
									);
		$this->videos_banner		= array(
										 '01'		=> "254px X 192px(Battle of the Band)", 
										 '02'		=> "255px X 252px(Jobs)"							
									);
		$this->jobs_banner			= array(
										 '01'		=> "302px X 299px(Jobs)",
										 '02'		=> "301px X 109px",
										 '03'		=> "300px X 81px"	 
									);
																											
		$this->competitions_banner	=array(
										'01'		=> "179px X 201px(Live Musical night)"
								  );						
		$this->education_banner		=array(
										'01'		=> "302px X 300px(Intercollege Bowling championship)",
										'02'		=> "302px X 299px(Jobs)"
								  );					  
		$this->dating_banner 		=array(
										'01'		=> "302px X 300px(Intercollege Bowling championship)",
										'02'		=> "179px X 201px(Live Musical night)"
								  );					  
		$this->events_banner		=array(
										'01'		=>	"179px X 201px(Live Musical night)",
										'02'		=>	"179px X 178px(Intercollege Bowling championship)"
								   );					  
		$this->my_inbox_banner		=array(
										'01'		=>	"168px X 146px(Add 1)",
										'02'		=>	"168px X 146px(Add 2)",
										'03'		=>	"168px X 146px(Add 3)",
								  );					   
		$this->more_listing_banner	=array(
										'01'		=>	"302px X 299px(Jobs)",
										'02'		=>	"302px X 226px(Battle of the Band)"
								  );	
			
		$this->search_listing_banner =array(
										'01'		=>	"302px X 299px(Jobs)",
										'02'		=>	"302px X 226px(Battle of the Band)"
								  );
		$this->details_listing_banner =array(
										'01'		=>	"302px X 299px(Jobs)",
										'02'		=>	"302px X 226px(Battle of the Band)"
								  );
								  	
		$this->banner_168x146_size	=	array(
												'width'		=> "168",
												'height' 	=> "146"
											 );
		$this->banner_179x178_size	=	array(
												'width'		=> "179",
												'height' 	=> "178"
											 );
		$this->banner_179x201_size	=	array(
												'width'		=> "179",
												'height' 	=> "201"
											 );
		$this->banner_190x214_size	=	array(
												'width'		=> "190",
												'height' 	=> "214"
											 );
		$this->banner_200x199_size	=	array(
												'width'		=> "200",
												'height' 	=> "199"
											 );										 
		$this->banner_254x192_size	=	array(
												'width'		=> "254",
												'height' 	=> "192"
											 );
		$this->banner_255x252_size	=	array(
												'width'		=> "255",
												'height' 	=> "252"
											 );
		$this->banner_300x81_size	=	array(
												'width'		=> "300",
												'height' 	=> "81"
											 );	
		$this->banner_300x174_size	=	array(
												'width'		=> "300",
												'height' 	=> "174"
											 );			 
		$this->banner_300x250_size	=	array(
												'width'		=> "300",
												'height' 	=> "250"
											 );
		$this->banner_301x109_size	=	array(
												'width'		=> "301",
												'height' 	=> "109"
											 );
		$this->banner_302x226_size	=	array(
												'width'		=> "302",
												'height' 	=> "226"
											 );
		$this->banner_302x299_size	=	array(
												'width'		=> "302",
												'height' 	=> "299"
											 );
		$this->banner_302x300_size	=	array(
												'width'		=> "302",
												'height' 	=> "300"
											 );
		$this->banner_468x60_size	=	array(
												'width'		=> "468",
												'height' 	=> "60"
											 );														  												
									
		//Added by Purushottam
		
		$this->array_industry = array(
						"Select",		                    	
                        "Accounting and Auditing Services",
                        "Advertising and PR Services",
                        "Aerospace and Defense",
                        "Agriculture/Forestry/Fishing",
                        "Architectural and Design Services",
                        "Automotive and Parts Manufacturing",
                        "Automotive Sales and Repair Services",
                        "Banking",
                        "Biotechnology/Pharmaceuticals",
                        "Broadcasting/Music/Film",
                        "Business Services - Other",
                        "Chemicals/Petro-Chemicals",
                        "Clothing and Textile Manufacturing",
                        "Computer Hardware",
                        "Computer Software",
                        "Computer/IT Services",
                        "Construction - Industrial Facilities and Infrastructure",
                        "Construction - Residential & Commercial/Office",
                        "Consumer Packaged Goods Manufacturing",
                        "Education",
                        "Electronics, Components, and Semiconductor Manufacturing",
                        "Energy and Utilities",
                        "Engineering Services",
                        "Entertainment Venues and Theaters",
                        "Financial Services",
                        "Food and Beverage Production",
                        "Government and Military",
                        "Healthcare Services",
                        "Hotels and Lodging",
                        "Insurance",
                        "Internet Services",
                        "Legal Services",
                        "Management Consulting Services",
                        "Manufacturing - Other",
                        "Marine Manufacturing &amp; Services",
                        "Medical Devices and Supplies",
                        "Metals and Minerals",
                        "Nonprofit Charitable Organizations",
                        "Performing and Fine Arts",
                        "Personal and Household Services",
                        "Printing and Publishing",
                        "Real Estate/Property Management",
                        "Rental Services",
                        "Restaurant/Food Services",
                        "Retail",
                        "Security and Surveillance",
                        "Sports and Physical Recreation",
                        "Staffing/Employment Agencies",
                        "Telecommunication Services",
                        "Transport and Storage - Materials",
                        "Travel, Transportation, and Tourism",
                        "Waste Management",
                        "Wholesale Trade/Import-Export",
                        "Other/Not Classified"
						);			
		
		$this->industry_list = array("" => "Select",		                    	
                        "Accounting and Auditing Services" => "Accounting and Auditing Services",
                        "Advertising and PR Services" => "Advertising and PR Services",                           
                        "Aerospace and Defense" => "Aerospace and Defense",
                        "Agriculture/Forestry/Fishing" => "Agriculture/Forestry/Fishing",
                        "Architectural and Design Services" => "Architectural and Design Services",
                        "Automotive and Parts Manufacturing" => "Automotive and Parts Manufacturing",
                        "Automotive Sales and Repair Services" => "Automotive Sales and Repair Services",
                        "Banking" => "Banking",
                        "Biotechnology/Pharmaceuticals" => "Biotechnology/Pharmaceuticals",
                        "Broadcasting/Music/Film" => "Broadcasting/Music/Film",
                        "Business Services - Other" => "Business Services - Other",
                        "Chemicals/Petro-Chemicals" => "Chemicals/Petro-Chemicals",
                        "Clothing and Textile Manufacturing" => "Clothing and Textile Manufacturing",
                        "Computer Hardware" => "Computer Hardware",
                        "Computer Software" => "Computer Software",
                        "Computer/IT Services" => "Computer/IT Services",
                        "Construction - Industrial Facilities and Infrastructure" => "Construction - Industrial Facilities and Infrastructure",
                        "Construction - Residential & Commercial/Office" => "Construction - Residential & Commercial/Office",
                        "Consumer Packaged Goods Manufacturing" => "Consumer Packaged Goods Manufacturing",
                        "Education" => "Education",
                        "Electronics, Components, and Semiconductor Manufacturing" => "Electronics, Components, and Semiconductor Manufacturing",
                        "Energy and Utilities" => "Energy and Utilities",
                        "Engineering Services" => "Engineering Services",
                        "Entertainment Venues and Theaters" => "Entertainment Venues and Theaters",
                        "Financial Services" => "Financial Services",
                        "Food and Beverage Production" => "Food and Beverage Production",
                        "Government and Military" => "Government and Military",
                        "Healthcare Services" => "Healthcare Services",
                        "Hotels and Lodging" => "Hotels and Lodging",
                        "Insurance" => "Insurance",
                        "Internet Services" => "Internet Services",
                        "Legal Services" => "Legal Services",
                        "Management Consulting Services" => "Management Consulting Services",
                        "Manufacturing - Other" => "Manufacturing - Other",
                        "Marine Manufacturing &amp; Services" => "Marine Manufacturing &amp; Services",
                        "Medical Devices and Supplies" => "Medical Devices and Supplies",
                        "Metals and Minerals" => "Metals and Minerals",
                        "Nonprofit Charitable Organizations" => "Nonprofit Charitable Organizations",
                        "Performing and Fine Arts" => "Performing and Fine Arts",
                        "Personal and Household Services" => "Personal and Household Services",
                        "Printing and Publishing" => "Printing and Publishing",
                        "Real Estate/Property Management" => "Real Estate/Property Management",
                        "Rental Services" => "Rental Services",
                        "Restaurant/Food Services" => "Restaurant/Food Services",
                        "Retail" => "Retail",
                        "Security and Surveillance" => "Security and Surveillance",
                        "Sports and Physical Recreation" => "Sports and Physical Recreation",
                        "Staffing/Employment Agencies" => "Staffing/Employment Agencies",
                        "Telecommunication Services" => "Telecommunication Services",
                        "Transport and Storage - Materials" => "Transport and Storage - Materials",
                        "Travel, Transportation, and Tourism" => "Travel, Transportation, and Tourism",
                        "Waste Management" => "Waste Management",
                        "Wholesale Trade/Import-Export" => "Wholesale Trade/Import-Export",
                        'Other/Not Classified' => "Other/Not Classified"
						);	
							
		$this->state_list = array(
							''=>"Select ",
							'Alabama'=>"Alabama",  
							'Alaska'=>"Alaska",  
							'Arizona'=>"Arizona",  
							'Arkansas'=>"Arkansas",  
							'California'=>"California",  
							'Colorado'=>"Colorado",  
							'Connecticut'=>"Connecticut",  
							'Delaware'=>"Delaware",  
							'District Of Columbia'=>"District Of Columbia",  
							'Florida'=>"Florida",  
							'Georgia'=>"Georgia",  
							'Hawaii'=>"Hawaii",  
							'Idaho'=>"Idaho",  
							'Illinois'=>"Illinois",  
							'Indiana'=>"Indiana",  
							'Iowa'=>"Iowa",  
							'Kansas'=>"Kansas",  
							'Kentucky'=>"Kentucky",  
							'Louisiana'=>"Louisiana",  
							'Maine'=>"Maine",  
							'Maryland'=>"Maryland",  
							'Massachusetts'=>"Massachusetts",  
							'Michigan'=>"Michigan",  
							'Minnesota'=>"Minnesota",  
							'Mississippi'=>"Mississippi",  
							'Missouri'=>"Missouri",  
							'Montana'=>"Montana",
							'Nebraska'=>"Nebraska",
							'Nevada'=>"Nevada",
							'New Hampshire'=>"New Hampshire",
							'New Jersey'=>"New Jersey",
							'New Mexico'=>"New Mexico",
							'New York'=>"New York",
							'North Carolina'=>"North Carolina",
							'North Dakota'=>"North Dakota",
							'Ohio'=>"Ohio",  
							'Oklahoma'=>"Oklahoma",  
							'Oregon'=>"Oregon",  
							'Pennsylvania'=>"Pennsylvania",  
							'Rhode Island'=>"Rhode Island",  
							'South Carolina'=>"South Carolina",  
							'South Dakota'=>"South Dakota",
							'Tennessee'=>"Tennessee",  
							'Texas'=>"Texas",  
							'Utah'=>"Utah",  
							'Vermont'=>"Vermont",  
							'Virginia'=>"Virginia",  
							'Washington'=>"Washington",  
							'West Virginia'=>"West Virginia",  
							'Wisconsin'=>"Wisconsin",  
							'Wyoming'=>"Wyoming");						
							
				$this->state_list2 = array(""=>" Select State",
							'Alabama'=>"Alabama",  
							'Alaska'=>"Alaska",  
							'Arizona'=>"Arizona",  
							'Arkansas'=>"Arkansas",  
							'California'=>"California",  
							'Colorado'=>"Colorado",  
							'Connecticut'=>"Connecticut",  
							'Delaware'=>"Delaware",  
							'District Of Columbia'=>"District Of Columbia",  
							'Florida'=>"Florida",  
							'Georgia'=>"Georgia",  
							'Hawaii'=>"Hawaii",  
							'Idaho'=>"Idaho",  
							'Illinois'=>"Illinois",  
							'Indiana'=>"Indiana",  
							'Iowa'=>"Iowa",  
							'Kansas'=>"Kansas",  
							'Kentucky'=>"Kentucky",  
							'Louisiana'=>"Louisiana",  
							'Maine'=>"Maine",  
							'Maryland'=>"Maryland",  
							'Massachusetts'=>"Massachusetts",  
							'Michigan'=>"Michigan",  
							'Minnesota'=>"Minnesota",  
							'Mississippi'=>"Mississippi",  
							'Missouri'=>"Missouri",  
							'Montana'=>"Montana",
							'Nebraska'=>"Nebraska",
							'Nevada'=>"Nevada",
							'New Hampshire'=>"New Hampshire",
							'New Jersey'=>"New Jersey",
							'New Mexico'=>"New Mexico",
							'New York'=>"New York",
							'North Carolina'=>"North Carolina",
							'North Dakota'=>"North Dakota",
							'Ohio'=>"Ohio",  
							'Oklahoma'=>"Oklahoma",  
							'Oregon'=>"Oregon",  
							'Pennsylvania'=>"Pennsylvania",  
							'Rhode Island'=>"Rhode Island",  
							'South Carolina'=>"South Carolina",  
							'South Dakota'=>"South Dakota",
							'Tennessee'=>"Tennessee",  
							'Texas'=>"Texas",  
							'Utah'=>"Utah",  
							'Vermont'=>"Vermont",  
							'Virginia'=>"Virginia",  
							'Washington'=>"Washington",  
							'West Virginia'=>"West Virginia",  
							'Wisconsin'=>"Wisconsin",  
							'Wyoming'=>"Wyoming");								
	
		$this->country = array (
						""=>" Select Country",
						"1"=>"USA",
						"2"=>"Afghanistan",
						"3"=>"Albania",
						"4"=>"Algeria",
						"5"=>"American Samoa",
						"6"=>"Andorra",
						"7"=>"Angola",
						"8"=>"Anguilla",
						"9"=>"Antarctica",
						"10"=>"Antigua and Barbuda",
						"11"=>"Argentina",
						"12"=>"Armenia",
						"13"=>"Aruba",
						"14"=>"Australia",
						"15"=>"Austria",
						"16"=>"Azerbaijan",
						"17"=>"Bahamas",
						"18"=>"Bahrain",
						"19"=>"Bangladesh",
						"20"=>"Barbados",
						"21"=>"Belarussia",
						"22"=>"Belgium",
						"23"=>"Belize",
						"24"=>"Benin",
						"25"=>"Bermuda",
						"26"=>"Bhutan",
						"27"=>"Bolivia",
						"28"=>"Bosnia and Herzegovina",
						"30"=>"Botswana",
						"31"=>"Bouvet Island",
						"32"=>"Brazil",
						"33"=>"British Indian Ocean Territory",
						"34"=>"Brunei Darussalam",
						"35"=>"Bulgaria",
						"36"=>"Burkina Faso",
						"37"=>"Burma",
						"38"=>"Burundi",
						"39"=>"Cambodia",
						"40"=>"Cameroon",
						"41"=>"Canada",
						"42"=>"Canton and Enderbury Islands",
						"43"=>"Cape Verde",
						"44"=>"Cayman Islands",
						"45"=>"Central African Republic",
						"46"=>"Chad",
						"47"=>"Chile",
						"48"=>"China",
						"49"=>"Christmas Island",
						"50"=>"Cocos (Keeling) Islands",
						"51"=>"Colombia",
						"52"=>"Comoros",
						"53"=>"Congo",
						"54"=>"Cook Islands",
						"55"=>"Costa Rica",
						"56"=>"Cote DIvoire",
						"57"=>"Croatia (Hrvatska)",
						"58"=>"Cuba",
						"59"=>"Cyprus",
						"60"=>"Czech Republic",
						"61"=>"Democratic Yemen",
						"62"=>"Denmark",
						"63"=>"Djibouti",
						"64"=>"Dominica",
						"65"=>"Dominican Republic",
						"66"=>"Dronning Maud Land",
						"67"=>"East Timor",
						"68"=>"Ecuador",
						"69"=>"Egypt",
						"70"=>"El Salvador",
						"71"=>"Equatorial Guinea",
						"72"=>"Eritrea",
						"73"=>"Estonia",
						"74"=>"Ethiopia",
						"75"=>"Falkland Islands (Malvinas)",
						"76"=>"Faroe Islands",
						"77"=>"Fiji",
						"78"=>"Finland",
						"79"=>"France",
						"80"=>"France, Metropolitan",
						"81"=>"French Guiana",
						"82"=>"French Polynesia",
						"83"=>"French Southern Territories",
						"84"=>"Gabon",
						"85"=>"Gambia",
						"86"=>"Georgia",
						"87"=>"Germany",
						"88"=>"Ghana",
						"89"=>"Gibraltar",
						"90"=>"Greece",
						"91"=>"Greenland",
						"92"=>"Grenada",
						"93"=>"Guadeloupe",
						"94"=>"Guam",
						"95"=>"Guatemala",
						"96"=>"Guinea",
						"97"=>"Guinea-bisseu",
						"98"=>"Guyana",
						"99"=>"Haiti",
						"100"=>"Heard and Mc Donald Islands",
						"101"=>"Honduras",
						"102"=>"Hong Kong",
						"103"=>"Hungary",
						"104"=>"Iceland",
						"105"=>"India",
						"106"=>"Indonesia",
						"107"=>"Iran(Islamic Republic of)",
						"108"=>"Iraq",
						"109"=>"Ireland",
						"110"=>"Israel",
						"111"=>"Italy",
						"112"=>"Ivory Coast",
						"113"=>"Jamaica",
						"114"=>"Japan",
						"115"=>"Johnston Island",
						"116"=>"Jordan",
						"117"=>"Kazakstan",
						"118"=>"Kenya",
						"119"=>"Kiribati",
						"120"=>"Korea",
						"121"=>"Kuwait",
						"122"=>"Kyrgyzstan",
						"123"=>"Latvia",
						"124"=>"Lebanon",
						"125"=>"Lesotho",
						"126"=>"Liberia",
						"127"=>"Libyan Arab Jamahiriya",
						"128"=>"Liechtenstein",
						"129"=>"Lithuania",
						"130"=>"Luxembourg",
						"131"=>"Macau",
						"132"=>"Macedonia",
						"133"=>"Madagascar",
						"134"=>"Malawi",
						"135"=>"Malaysia",
						"136"=>"Maldives",
						"137"=>"Mali",
						"138"=>"Malta",
						"139"=>"Marshall Islands",
						"140"=>"Martinique",
						"141"=>"Mauritania",
						"142"=>"Mauritius",
						"143"=>"Mayotte",
						"144"=>"Mexico",
						"146"=>"Midway Islands",
						"147"=>"Moldova, Republic of",
						"148"=>"Monaco",
						"149"=>"Mongolia",
						"150"=>"Montserrat",
						"151"=>"Morocco",
						"152"=>"Mozambique",
						"153"=>"Myanmar",
						"154"=>"Namibia",
						"155"=>"Nauru",
						"156"=>"Nepal",
						"157"=>"Netherlands",
						"158"=>"Netherlands Antilles",
						"159"=>"Neutral Zone",
						"160"=>"New Calidonia",
						"161"=>"New Zealand",
						"162"=>"Nicaragua",
						"163"=>"Niger",
						"164"=>"Nigeria",
						"165"=>"Niue",
						"166"=>"Norfolk Island",
						"167"=>"Northern Mariana Islands",
						"168"=>"Norway",
						"169"=>"Oman",
						"170"=>"Pacific Islands",
						"171"=>"Pakistan",
						"172"=>"Palau",
						"173"=>"Palestine",
						"174"=>"Panama",
						"175"=>"Papua New Guinea",
						"176"=>"Paraguay",
						"177"=>"Peru",
						"178"=>"Philippines",
						"179"=>"Pitcairn Island",
						"180"=>"Poland",
						"181"=>"Portugal",
						"182"=>"Puerto Rico",
						"183"=>"Qatar",
						"184"=>"Reunion",
						"185"=>"Romania",
						"186"=>"Russian Federation",
						"187"=>"Rwanda",
						"188"=>"S. Georgia and S. Sandwich Isls.",
						"189"=>"Saint Lucia",
						"190"=>"Saint Vincent/Grenadines",
						"191"=>"Samoa",
						"192"=>"San Marino",
						"193"=>"Sao Tome and Principe",
						"194"=>"Saudi Arabia",
						"195"=>"Senegal",
						"196"=>"Seychelles",
						"197"=>"Sierra Leone",
						"198"=>"Singapore",
						"199"=>"Slovakia (Slovak Republic)",
						"200"=>"Slovenia",
						"201"=>"Solomon Islands",
						"202"=>"Somalia",
						"203"=>"South Africa",
						"204"=>"Spain",
						"205"=>"Sri Lanka",
						"206"=>"St. Helena",
						"207"=>"St. Kitts Nevis Anguilla",
						"208"=>"St. Pierre and Miquelon",
						"209"=>"Sudan",
						"210"=>"Suriname",
						"211"=>"Svalbard and Jan Mayen Islands",
						"212"=>"Swaziland",
						"213"=>"Sweden",
						"214"=>"Switzerland",
						"215"=>"Syrian Arab Republic",
						"216"=>"Taiwan ",
						"217"=>"Tajikistan",
						"218"=>"Tanzania, United Republic of ",
						"219"=>"Thailand",
						"220"=>"Togo",
						"221"=>"Tokelau",
						"222"=>"Tonga",
						"223"=>"Trinidad and Tobago",
						"224"=>"Tunisia",
						"225"=>"Turkey",
						"226"=>"Turkmenistan",
						"227"=>"Turks and Caicos Islands",
						"228"=>"Tuvalu",
						"229"=>"US Minor Outlying Islands",
						"230"=>"Uganda",
						"231"=>"Ukraine",
						"232"=>"United Arab Emirates",
						"233"=>"United Kingdom",
						"234"=>"United States Pacific Islands",
						"235"=>"Upper Volta",
						"236"=>"Uruguay",
						"237"=>"Uzbekistan",
						"238"=>"Vanuatu",
						"239"=>"Vatican City State",
						"240"=>"Venezuela",
						"241"=>"VietNam",
						"242"=>"Virgin Islands, British",
						"243"=>"Virgin Islands, Unites States ",
						"244"=>"Wake Island",
						"245"=>"Wallis and Futuma Islands",
						"246"=>"Western Sahara",
						"247"=>"Yemen",
						"248"=>"Yugoslavia",
						"249"=>"Zaire",
						"250"=>"Zambia",
						"251"=>"Zimbabwe",	
						"252" => "Other"					
						);

		//Added by Puru
		$this->country1 = array (
						"" =>" Select ",
						"USA"=>"USA",
						"Afghanistan"=>"Afghanistan",
						"Albania"=>"Albania",
						"Algeria"=>"Algeria",
						"American Samoa"=>"American Samoa",
						"Andorra"=>"Andorra",
						"Angola"=>"Angola",
						"Anguilla"=>"Anguilla",
						"Antarctica"=>"Antarctica",
						"Antigua and Barbuda"=>"Antigua and Barbuda",
						"Argentina"=>"Argentina",
						"Armenia"=>"Armenia",
						"Aruba"=>"Aruba",
						"Australia"=>"Australia",
						"Austria"=>"Austria",
						"Azerbaijan"=>"Azerbaijan",
						"Bahamas"=>"Bahamas",
						"Bahrain"=>"Bahrain",
						"Bangladesh"=>"Bangladesh",
						"Barbados"=>"Barbados",
						"Belarussia"=>"Belarussia",
						"Belgium"=>"Belgium",
						"Belize"=>"Belize",
						"Benin"=>"Benin",
						"Bermuda"=>"Bermuda",
						"Bhutan"=>"Bhutan",
						"Bolivia"=>"Bolivia",
						"Bosnia and Herzegovina"=>"Bosnia and Herzegovina",
						"Botswana"=>"Botswana",
						"Bouvet Island"=> "Bouvet Island",
						"Brazil"=>"Brazil",
						"British Indian Ocean Territory"=>"British Indian Ocean Territory",
						"Brunei Darussalam"=>"Brunei Darussalam",
						"Bulgaria"=>"Bulgaria",
						"Burkina Faso"=>"Burkina Faso",
						"Burma"=>"Burma",
						"Burundi"=>"Burundi",
						"Cambodia"=>"Cambodia",
						"Cameroon"=>"Cameroon",
						"Canada"=>"Canada",
						"Canton and Enderbury Islands"=>"Canton and Enderbury Islands",
						"Cape Verde"=>"Cape Verde",
						"Cayman Islands"=>"Cayman Islands",
						"Central African Republic"=>"Central African Republic",
						"Chad"=>"Chad",
						"Chile"=>"Chile",
						"China"=>"China",
						"Christmas Island"=>"Christmas Island",
						"Cocos (Keeling) Islands"=>"Cocos (Keeling) Islands",
						"Colombia"=>"Colombia",
						"Comoros"=>"Comoros",
						"Congo"=>"Congo",
						"Cook Islands"=>"Cook Islands",
						"Costa Rica"=>"Costa Rica",
						"Cote DIvoire"=>"Cote DIvoire",
						"Croatia (Hrvatska)"=>"Croatia (Hrvatska)",
						"Cuba"=>"Cuba",
						"Cyprus"=>"Cyprus",
						"Czech Republic"=>"Czech Republic",
						"Democratic Yemen"=>"Democratic Yemen",
						"Denmark"=>"Denmark",
						"Djibouti"=>"Djibouti",
						"Dominica"=>"Dominica",
						"Dominican Republic"=>"Dominican Republic",
						"Dronning Maud Land"=>"Dronning Maud Land",
						"East Timor"=>"East Timor",
						"Ecuador"=>"Ecuador",
						"Egypt"=>"Egypt",
						"El Salvador"=>"El Salvador",
						"Equatorial Guinea"=>"Equatorial Guinea",
						"Eritrea"=>"Eritrea",
						"Estonia"=>"Estonia",
						"Ethiopia"=>"Ethiopia",
						"Falkland Islands (Malvinas)"=>"Falkland Islands (Malvinas)",
						"Faroe Islands"=>"Faroe Islands",
						"Fiji"=>"Fiji",
						"Finland"=>"Finland",
						"France"=>"France",
						"France, Metropolitan"=>"France, Metropolitan",
						"French Guiana"=>"French Guiana",
						"French Polynesia"=>"French Polynesia",
						"French Southern Territories"=>"French Southern Territories",
						"Gabon"=>"Gabon",
						"Gambia"=>"Gambia",
						"Georgia"=>"Georgia",
						"Germany"=>"Germany",
						"Ghana"=>"Ghana",
						"Gibraltar"=>"Gibraltar",
						"Greece"=>"Greece",
						"Greenland"=>"Greenland",
						"Grenada"=>"Grenada",
						"Guadeloupe"=>"Guadeloupe",
						"Guam"=>"Guam",
						"Guatemala"=>"Guatemala",
						"Guinea"=>"Guinea",
						"Guinea-bisseu"=>"Guinea-bisseu",
						"Guyana"=>"Guyana",
						"Haiti"=>"Haiti",
						"Heard and Mc Donald Islands"=>"Heard and Mc Donald Islands",
						"Honduras"=>"Honduras",
						"Hong Kong"=>"Hong Kong",
						"Hungary"=>"Hungary",
						"Iceland"=>"Iceland",
						"India"=>"India",
						"Indonesia"=>"Indonesia",
						"Iran(Islamic Republic of)"=>"Iran(Islamic Republic of)",
						"Iraq"=>"Iraq",
						"Ireland"=>"Ireland",
						"Israel"=>"Israel",
						"Italy"=>"Italy",
						"Ivory Coast"=>"Ivory Coast",
						"Jamaica"=>"Jamaica",
						"Japan"=>"Japan",
						"Johnston Island"=>"Johnston Island",
						"Jordan"=>"Jordan",
						"Kazakstan"=>"Kazakstan",
						"Kenya"=>"Kenya",
						"Kiribati"=>"Kiribati",
						"Korea"=>"Korea",
						"Kuwait"=>"Kuwait",
						"Kyrgyzstan"=>"Kyrgyzstan",
						"Latvia"=>"Latvia",
						"Lebanon"=>"Lebanon",
						"Lesotho"=>"Lesotho",
						"Liberia"=>"Liberia",
						"Libyan Arab Jamahiriya"=>"Libyan Arab Jamahiriya",
						"Liechtenstein"=>"Liechtenstein",
						"Lithuania"=>"Lithuania",
						"Luxembourg"=>"Luxembourg",
						"Macau"=>"Macau",
						"Macedonia"=>"Macedonia",
						"Madagascar"=>"Madagascar",
						"Malawi"=>"Malawi",
						"Malaysia"=>"Malaysia",
						"Maldives"=>"Maldives",
						"Mali"=>"Mali",
						"Malta"=>"Malta",
						"Marshall Islands"=>"Marshall Islands",
						"Martinique"=>"Martinique",
						"Mauritania"=>"Mauritania",
						"Mauritius"=>"Mauritius",
						"Mayotte"=>"Mayotte",
						"Mexico"=>"Mexico",
						"Midway Islands"=>"Midway Islands",
						"Moldova, Republic of"=>"Moldova, Republic of",
						"Monaco"=>"Monaco",
						"Mongolia"=>"Mongolia",
						"Montserrat"=>"Montserrat",
						"Morocco"=>"Morocco",
						"Mozambique"=>"Mozambique",
						"Myanmar"=>"Myanmar",
						"Namibia"=>"Namibia",
						"Nauru"=>"Nauru",
						"Nepal"=>"Nepal",
						"Netherlands"=>"Netherlands",
						"Netherlands Antilles"=>"Netherlands Antilles",
						"Neutral Zone"=>"Neutral Zone",
						"New Calidonia"=>"New Calidonia",
						"New Zealand"=>"New Zealand",
						"Nicaragua"=>"Nicaragua",
						"Niger"=>"Niger",
						"Nigeria"=>"Nigeria",
						"Niue"=>"Niue",
						"Norfolk Island"=>"Norfolk Island",
						"Northern Mariana Islands"=>"Northern Mariana Islands",
						"Norway"=>"Norway",
						"Oman"=>"Oman",
						"Pacific Islands"=>"Pacific Islands",
						"Pakistan"=>"Pakistan",
						"Palau"=>"Palau",
						"Palestine"=>"Palestine",
						"Panama"=>"Panama",
						"Papua New Guinea"=>"Papua New Guinea",
						"Paraguay"=>"Paraguay",
						"Peru"=>"Peru",
						"Philippines"=>"Philippines",
						"Pitcairn Island"=>"Pitcairn Island",
						"Poland"=>"Poland",
						"Portugal"=>"Portugal",
						"Puerto Rico"=>"Puerto Rico",
						"Qatar"=>"Qatar",
						"Reunion"=>"Reunion",
						"Romania"=>"Romania",
						"Russian Federation"=>"Russian Federation",
						"Rwanda"=>"Rwanda",
						"S. Georgia and S. Sandwich Isls."=>"S. Georgia and S. Sandwich Isls.",
						"Saint Lucia"=>"Saint Lucia",
						"Saint Vincent/Grenadines"=>"Saint Vincent/Grenadines",
						"Samoa"=>"Samoa",
						"San Marino"=>"San Marino",
						"Sao Tome and Principe"=>"Sao Tome and Principe",
						"Saudi Arabia"=>"Saudi Arabia",
						"Senegal"=>"Senegal",
						"Seychelles"=>"Seychelles",
						"Sierra Leone"=>"Sierra Leone",
						"Singapore"=>"Singapore",
						"Slovakia (Slovak Republic)"=>"Slovakia (Slovak Republic)",
						"Slovenia"=>"Slovenia",
						"Solomon Islands"=>"Solomon Islands",
						"Somalia"=>"Somalia",
						"South Africa"=>"South Africa",
						"Spain"=>"Spain",
						"Sri Lanka"=>"Sri Lanka",
						"St. Helena"=>"St. Helena",
						"St. Kitts Nevis Anguilla"=>"St. Kitts Nevis Anguilla",
						"St. Pierre and Miquelon"=>"St. Pierre and Miquelon",
						"Sudan"=>"Sudan",
						"Suriname"=>"Suriname",
						"Svalbard and Jan Mayen Islands"=>"Svalbard and Jan Mayen Islands",
						"Swaziland"=>"Swaziland",
						"Sweden"=>"Sweden",
						"Switzerland"=>"Switzerland",
						"Syrian Arab Republic"=>"Syrian Arab Republic",
						"Taiwan "=>"Taiwan ",
						"Tajikistan"=>"Tajikistan",
						"Tanzania, United Republic of "=>"Tanzania, United Republic of ",
						"Thailand"=>"Thailand",
						"Togo"=>"Togo",
						"Tokelau"=>"Tokelau",
						"Tonga"=>"Tonga",
						"Trinidad and Tobago"=>"Trinidad and Tobago",
						"Tunisia"=>"Tunisia",
						"Turkey"=>"Turkey",
						"Turkmenistan"=>"Turkmenistan",
						"Turks and Caicos Islands"=>"Turks and Caicos Islands",
						"Tuvalu"=>"Tuvalu",
						"US Minor Outlying Islands"=>"US Minor Outlying Islands",
						"Uganda"=>"Uganda",
						"Ukraine"=>"Ukraine",
						"United Arab Emirates"=>"United Arab Emirates",
						"United Kingdom"=>"United Kingdom",
						"United States Pacific Islands"=>"United States Pacific Islands",
						"Upper Volta"=>"Upper Volta",
						"Uruguay"=>"Uruguay",
						"Uzbekistan"=>"Uzbekistan",
						"Vanuatu"=>"Vanuatu",
						"Vatican City State"=>"Vatican City State",
						"Venezuela"=>"Venezuela",
						"VietNam"=>"VietNam",
						"Virgin Islands, British"=>"Virgin Islands, British",
						"Virgin Islands, Unites States "=>"Virgin Islands, Unites States ",
						"Wake Island"=>"Wake Island",
						"Wallis and Futuma Islands"=>"Wallis and Futuma Islands",
						"Western Sahara"=>"Western Sahara",
						"Yemen"=>"Yemen",
						"Yugoslavia"=>"Yugoslavia",
						"Zaire"=>"Zaire",
						"Zambia"=>"Zambia",
						"Zimbabwe"=>"Zimbabwe"
					); 
					
		$this->country2 = array (
						"" =>"Select Country",
						"USA"=>"USA",
						"Afghanistan"=>"Afghanistan",
						"Albania"=>"Albania",
						"Algeria"=>"Algeria",
						"American Samoa"=>"American Samoa",
						"Andorra"=>"Andorra",
						"Angola"=>"Angola",
						"Anguilla"=>"Anguilla",
						"Antarctica"=>"Antarctica",
						"Antigua and Barbuda"=>"Antigua and Barbuda",
						"Argentina"=>"Argentina",
						"Armenia"=>"Armenia",
						"Aruba"=>"Aruba",
						"Australia"=>"Australia",
						"Austria"=>"Austria",
						"Azerbaijan"=>"Azerbaijan",
						"Bahamas"=>"Bahamas",
						"Bahrain"=>"Bahrain",
						"Bangladesh"=>"Bangladesh",
						"Barbados"=>"Barbados",
						"Belarussia"=>"Belarussia",
						"Belgium"=>"Belgium",
						"Belize"=>"Belize",
						"Benin"=>"Benin",
						"Bermuda"=>"Bermuda",
						"Bhutan"=>"Bhutan",
						"Bolivia"=>"Bolivia",
						"Bosnia and Herzegovina"=>"Bosnia and Herzegovina",
						"Botswana"=>"Botswana",
						 "Bouvet Island"=> "Bouvet Island",
						"Brazil"=>"Brazil",
						"British Indian Ocean Territory"=>"British Indian Ocean Territory",
						"Brunei Darussalam"=>"Brunei Darussalam",
						"Bulgaria"=>"Bulgaria",
						"Burkina Faso"=>"Burkina Faso",
						"Burma"=>"Burma",
						"Burundi"=>"Burundi",
						"Cambodia"=>"Cambodia",
						"Cameroon"=>"Cameroon",
						"Canada"=>"Canada",
						"Canton and Enderbury Islands"=>"Canton and Enderbury Islands",
						"Cape Verde"=>"Cape Verde",
						"Cayman Islands"=>"Cayman Islands",
						"Central African Republic"=>"Central African Republic",
						"Chad"=>"Chad",
						"Chile"=>"Chile",
						"China"=>"China",
						"Christmas Island"=>"Christmas Island",
						"Cocos (Keeling) Islands"=>"Cocos (Keeling) Islands",
						"Colombia"=>"Colombia",
						"Comoros"=>"Comoros",
						"Congo"=>"Congo",
						"Cook Islands"=>"Cook Islands",
						"Costa Rica"=>"Costa Rica",
						"Cote DIvoire"=>"Cote DIvoire",
						"Croatia (Hrvatska)"=>"Croatia (Hrvatska)",
						"Cuba"=>"Cuba",
						"Cyprus"=>"Cyprus",
						"Czech Republic"=>"Czech Republic",
						"Democratic Yemen"=>"Democratic Yemen",
						"Denmark"=>"Denmark",
						"Djibouti"=>"Djibouti",
						"Dominica"=>"Dominica",
						"Dominican Republic"=>"Dominican Republic",
						"Dronning Maud Land"=>"Dronning Maud Land",
						"East Timor"=>"East Timor",
						"Ecuador"=>"Ecuador",
						"Egypt"=>"Egypt",
						"El Salvador"=>"El Salvador",
						"Equatorial Guinea"=>"Equatorial Guinea",
						"Eritrea"=>"Eritrea",
						"Estonia"=>"Estonia",
						"Ethiopia"=>"Ethiopia",
						"Falkland Islands (Malvinas)"=>"Falkland Islands (Malvinas)",
						"Faroe Islands"=>"Faroe Islands",
						"Fiji"=>"Fiji",
						"Finland"=>"Finland",
						"France"=>"France",
						"France, Metropolitan"=>"France, Metropolitan",
						"French Guiana"=>"French Guiana",
						"French Polynesia"=>"French Polynesia",
						"French Southern Territories"=>"French Southern Territories",
						"Gabon"=>"Gabon",
						"Gambia"=>"Gambia",
						"Georgia"=>"Georgia",
						"Germany"=>"Germany",
						"Ghana"=>"Ghana",
						"Gibraltar"=>"Gibraltar",
						"Greece"=>"Greece",
						"Greenland"=>"Greenland",
						"Grenada"=>"Grenada",
						"Guadeloupe"=>"Guadeloupe",
						"Guam"=>"Guam",
						"Guatemala"=>"Guatemala",
						"Guinea"=>"Guinea",
						"Guinea-bisseu"=>"Guinea-bisseu",
						"Guyana"=>"Guyana",
						"Haiti"=>"Haiti",
						"Heard and Mc Donald Islands"=>"Heard and Mc Donald Islands",
						"Honduras"=>"Honduras",
						"Hong Kong"=>"Hong Kong",
						"Hungary"=>"Hungary",
						"Iceland"=>"Iceland",
						"India"=>"India",
						"Indonesia"=>"Indonesia",
						"Iran(Islamic Republic of)"=>"Iran(Islamic Republic of)",
						"Iraq"=>"Iraq",
						"Ireland"=>"Ireland",
						"Israel"=>"Israel",
						"Italy"=>"Italy",
						"Ivory Coast"=>"Ivory Coast",
						"Jamaica"=>"Jamaica",
						"Japan"=>"Japan",
						"Johnston Island"=>"Johnston Island",
						"Jordan"=>"Jordan",
						"Kazakstan"=>"Kazakstan",
						"Kenya"=>"Kenya",
						"Kiribati"=>"Kiribati",
						"Korea"=>"Korea",
						"Kuwait"=>"Kuwait",
						"Kyrgyzstan"=>"Kyrgyzstan",
						"Latvia"=>"Latvia",
						"Lebanon"=>"Lebanon",
						"Lesotho"=>"Lesotho",
						"Liberia"=>"Liberia",
						"Libyan Arab Jamahiriya"=>"Libyan Arab Jamahiriya",
						"Liechtenstein"=>"Liechtenstein",
						"Lithuania"=>"Lithuania",
						"Luxembourg"=>"Luxembourg",
						"Macau"=>"Macau",
						"Macedonia"=>"Macedonia",
						"Madagascar"=>"Madagascar",
						"Malawi"=>"Malawi",
						"Malaysia"=>"Malaysia",
						"Maldives"=>"Maldives",
						"Mali"=>"Mali",
						"Malta"=>"Malta",
						"Marshall Islands"=>"Marshall Islands",
						"Martinique"=>"Martinique",
						"Mauritania"=>"Mauritania",
						"Mauritius"=>"Mauritius",
						"Mayotte"=>"Mayotte",
						"Mexico"=>"Mexico",
						"Midway Islands"=>"Midway Islands",
						"Moldova, Republic of"=>"Moldova, Republic of",
						"Monaco"=>"Monaco",
						"Mongolia"=>"Mongolia",
						"Montserrat"=>"Montserrat",
						"Morocco"=>"Morocco",
						"Mozambique"=>"Mozambique",
						"Myanmar"=>"Myanmar",
						"Namibia"=>"Namibia",
						"Nauru"=>"Nauru",
						"Nepal"=>"Nepal",
						"Netherlands"=>"Netherlands",
						"Netherlands Antilles"=>"Netherlands Antilles",
						"Neutral Zone"=>"Neutral Zone",
						"New Calidonia"=>"New Calidonia",
						"New Zealand"=>"New Zealand",
						"Nicaragua"=>"Nicaragua",
						"Niger"=>"Niger",
						"Nigeria"=>"Nigeria",
						"Niue"=>"Niue",
						"Norfolk Island"=>"Norfolk Island",
						"Northern Mariana Islands"=>"Northern Mariana Islands",
						"Norway"=>"Norway",
						"Oman"=>"Oman",
						"Pacific Islands"=>"Pacific Islands",
						"Pakistan"=>"Pakistan",
						"Palau"=>"Palau",
						"Palestine"=>"Palestine",
						"Panama"=>"Panama",
						"Papua New Guinea"=>"Papua New Guinea",
						"Paraguay"=>"Paraguay",
						"Peru"=>"Peru",
						"Philippines"=>"Philippines",
						"Pitcairn Island"=>"Pitcairn Island",
						"Poland"=>"Poland",
						"Portugal"=>"Portugal",
						"Puerto Rico"=>"Puerto Rico",
						"Qatar"=>"Qatar",
						"Reunion"=>"Reunion",
						"Romania"=>"Romania",
						"Russian Federation"=>"Russian Federation",
						"Rwanda"=>"Rwanda",
						"S. Georgia and S. Sandwich Isls."=>"S. Georgia and S. Sandwich Isls.",
						"Saint Lucia"=>"Saint Lucia",
						"Saint Vincent/Grenadines"=>"Saint Vincent/Grenadines",
						"Samoa"=>"Samoa",
						"San Marino"=>"San Marino",
						"Sao Tome and Principe"=>"Sao Tome and Principe",
						"Saudi Arabia"=>"Saudi Arabia",
						"Senegal"=>"Senegal",
						"Seychelles"=>"Seychelles",
						"Sierra Leone"=>"Sierra Leone",
						"Singapore"=>"Singapore",
						"Slovakia (Slovak Republic)"=>"Slovakia (Slovak Republic)",
						"Slovenia"=>"Slovenia",
						"Solomon Islands"=>"Solomon Islands",
						"Somalia"=>"Somalia",
						"South Africa"=>"South Africa",
						"Spain"=>"Spain",
						"Sri Lanka"=>"Sri Lanka",
						"St. Helena"=>"St. Helena",
						"St. Kitts Nevis Anguilla"=>"St. Kitts Nevis Anguilla",
						"St. Pierre and Miquelon"=>"St. Pierre and Miquelon",
						"Sudan"=>"Sudan",
						"Suriname"=>"Suriname",
						"Svalbard and Jan Mayen Islands"=>"Svalbard and Jan Mayen Islands",
						"Swaziland"=>"Swaziland",
						"Sweden"=>"Sweden",
						"Switzerland"=>"Switzerland",
						"Syrian Arab Republic"=>"Syrian Arab Republic",
						"Taiwan "=>"Taiwan ",
						"Tajikistan"=>"Tajikistan",
						"Tanzania, United Republic of "=>"Tanzania, United Republic of ",
						"Thailand"=>"Thailand",
						"Togo"=>"Togo",
						"Tokelau"=>"Tokelau",
						"Tonga"=>"Tonga",
						"Trinidad and Tobago"=>"Trinidad and Tobago",
						"Tunisia"=>"Tunisia",
						"Turkey"=>"Turkey",
						"Turkmenistan"=>"Turkmenistan",
						"Turks and Caicos Islands"=>"Turks and Caicos Islands",
						"Tuvalu"=>"Tuvalu",
						"US Minor Outlying Islands"=>"US Minor Outlying Islands",
						"Uganda"=>"Uganda",
						"Ukraine"=>"Ukraine",
						"United Arab Emirates"=>"United Arab Emirates",
						"United Kingdom"=>"United Kingdom",
						"United States Pacific Islands"=>"United States Pacific Islands",
						"Upper Volta"=>"Upper Volta",
						"Uruguay"=>"Uruguay",
						"Uzbekistan"=>"Uzbekistan",
						"Vanuatu"=>"Vanuatu",
						"Vatican City State"=>"Vatican City State",
						"Venezuela"=>"Venezuela",
						"VietNam"=>"VietNam",
						"Virgin Islands, British"=>"Virgin Islands, British",
						"Virgin Islands, Unites States "=>"Virgin Islands, Unites States ",
						"Wake Island"=>"Wake Island",
						"Wallis and Futuma Islands"=>"Wallis and Futuma Islands",
						"Western Sahara"=>"Western Sahara",
						"Yemen"=>"Yemen",
						"Yugoslavia"=>"Yugoslavia",
						"Zaire"=>"Zaire",
						"Zambia"=>"Zambia",
						"Zimbabwe"=>"Zimbabwe"
					); 					
											
		$this->network_category = array(
										'1'=>"City/Country/Region",  
										'2'=>"Workplace",  
										'3'=>"School"
									);
		$this->card_list= array(
							''=>" Select ",					
							'American Express'=>"American Express",  	
							'Master Card'=>"Master Card",  
							'Visa'=>"Visa",
							'Discover'=>"Discover");
	
		$this->month_list = array(
							''=>"Month",  
							'01'=>"January",  
							'02'=>"February",  
							'03'=>"March",  
							'04'=>"April",  
							'05'=>"May",  
							'06'=>"June",  
							'07'=>"July",  
							'08'=>"August",  
							'09'=>"September",  
							'10'=>"October",  
							'11'=>"November",  
							'12'=>"December");		
							
		$this->marital_status = array(
							'1'=>"Single",  
							'2'=>"Committed",  
							'3'=>"Married");
							
		$this->comment_table_id = array(
									'1'=>"tbl_user_album_image");
									
		$this->blog_post_type = array(
							'1'=>"Recently Posted",  
							'2'=>"All Posts");		
							
		$this->updates_image = array(
							'1'		=>		'icon_add_contact.gif', 
							'2'		=>		'icon_my_videos.gif', 
							'3'		=>		'icon_my_photos.gif',
							'4'		=>		'icon_my_blogs.gif', 
							'5'		=>		'icon_network.gif', 
							'6'		=>		'icon_network.gif', 
							'7'		=>		'icon_my_music.gif',
							'8'		=>		'icon_add_contact.gif',
							'9'		=>		'dating_icon_flirt_01.gif'
							);
 		//array(1=>'Profile', 2=>'Video', 3=>'Photos', 4=>'Blog', 5=>'Groups', 6=>'Networks', 7=>'Music',8=>'Connection');							

                     		
		$this->forum_topic_sort_type = array(
							'INTERVAL 1 WEEK'	=>	"Last Week",  
							'INTERVAL 1 MONTH'	=>	"Last Month",  
							'INTERVAL 3 MONTH'	=>	"Last 3 Months",  
							'INTERVAL 6 MONTH'	=>	"Last 6 Months",  
							'all'				=>	"All Posts"
							);		
					
                    									
		$this->group_sort_type = array(
								'1'	=>"Recently Joined",  
								'2'	=>"By Name",  
								'all'	=>"All Groups"
								);		
								
							
		$this->forum_category_type = array(
									'1'	=>	"General",  
									'2'	=>	"Groups",  
									'3'	=>	"Beauty"
									);	
									

	
	$this->search_tabs = array(
							'search-web'=>"Web",  
							'search-people'=>"People",  
							'search-music'=>"Music",  
							'search-videos'=>"Videos",  
							'search-images'=>"Images",  
							'search-forums'=>"Forums",  
							'search-jobs'=>"Jobs",  
							'search-competitions'=>"Competitions"
							);  
							
	$this->search_tabs_02 = array('search-web','search-people','search-music','search-videos','search-images','search-forums','search-jobs','search-competitions');  
                      							
	$this->privacy_settings_01 = array(
									'1'	=>	"Only Friends",  
									'2'	=>	"Only Me",  
									'3'	=>	"Everyone"
									);	
									                      							
	$this->privacy_settings_02 = array(
									'1'	=>	"Only Friends",  
									'2'	=>	"Only Me"
									);	
									

									
			$this->sort_alpha = array(
						''	=>'All',
						'A'=>'A',
						'B'=>'B',
						'C'=>'C',
						'D'=>'D',
						'E'=>'E',
						'F'=>'F',
						'G'=>'G',
						'H'=>'H',
						'I'=>'I',
						'J'=>'J',
						'K'=>'K',
						'L'=>'L',
						'M'=>'M',
						'N'=>'N',
						'O'=>'O',
						'P'=>'P',
						'Q'=>'Q',
						'R'=>'R',
						'S'=>'S',
						'T'=>'T',
						'U'=>'U',
						'V'=>'V',
						'W'=>'W',
						'X'=>'X',
						'Y'=>'Y',
						'Z'=>'Z'
				);													

	$this->hour		 = array(
						''	=>'HH',
						'01'=>'01',
						'02'=>'02',
						'03'=>'03',
						'04'=>'04',
						'05'=>'05',
						'06'=>'06',
						'07'=>'07',
						'08'=>'08',
						'09'=>'09',
						'10'=>'10',
						'11'=>'11',
						'12'=>'12'
				);		
				
	$this->minute	 = array(
						''	=>'MM',
						'00'=>'00',
						'15'=>'15',
						'30'=>'30',
						'45'=>'45'
				);	
		$this->am_pm	= array(
						'am'=>'AM',
						'pm'=>'PM'
				);	
				
		$this->video_mime_type = array('avi','AVI','wmv','WMV','mov','MOV','mpg','MPG','mpeg','MPEG','rm','RM','flv','FLV', 'mp3','MP3', 'mp4','MP4');  
		
		
		$this->gender= array(1=>'Male',2=>'Female');
		
		
		/* Dating Section Array - START */
		$this->dating_gender= array(1=>'Male',2=>'Female');
									
		$this->dating_looking_for= array(1=>'Male',2=>'Female');
			
		$this->dating_age = array(18,50);
									
		$this->dating_interested_in = array(1=>'Friendship',
											2=>'Dating',
											3=>'Marriage',
											4=>'Serious Relationship');
									
		$this->dating_ethnicity = array(1=>'African-American',
										2=>'Asian',
										3=>'Caucasian',
										4=>'Hispanic/Latino',
										5=>'Middle Eastern',
										6=>'Native American',
										7=>'Pacific Islander',
										8=>'Inter-racial',
										100=>'Other');
		
		$this->dating_status	 = array(1=>'Single',2=>'Committed',3=>'Married',4=>'Divorced',5=>'Widowed',6=>'Other');
		
		$this->dating_religion 	= array(1=>'Atheist',
										2=>'Buddhist',
										3=>'Christian',
										4=>'Hindu',
										5=>'Jewish',
										6=>'Muslim',
										7=>'Not Religious',
										8=>'Spiritual',
										100=>'Other');
										
		$this->height = array(3,7);
		
		$this->dating_body_type = array(1=>'Slim',
										2=>'Slender',
										3=>'Average',
										4=>'Athletic',
										5=>'Fit',
										6=>'A few extra pounds',
										7=>'Large',
										8=>'Voluptuous',
										100=>'Other');		
										
		$this->dating_star_sign = array(1=>'Aries',
										2=>'Taurus',
										3=>'Gemini',
										4=>'Cancer',
										5=>'Leo',
										6=>'Virgo',
										7=>'Libra',
										8=>'Scorpio',
										9=>'Sagittarius',
										10=>'Capricorn',
										11=>'Aquarius',
										12=>'Pisces');
										
										
		$this->dating_eyes =  array(1=>'Black',
									2=>'Blue',
									3=>'Brown',
									4=>'Gray',
									5=>'Green',
									6=>'Hazel',
									100=>'Other');
									
		$this->dating_hair =  array(1=>'Auburn',
									2=>'Black',
									3=>'Blonde',
									4=>'Light Brown',
									5=>'Dark Brown',
									6=>'White / Gray',
									7=>'Bald',
									8=>'A little Gray',
									100=>'Other');
									
		$this->dating_art =   array(1=>'Strategically placed tattoo',
									2=>'Visible tattoo',
									3=>'Pierced ears',
									4=>'Pierced tongue',
									5=>'Navel tattoo',
									0=>'Other piercing');
		
		$this->dating_best_feature =  array(1=>'Eyes',
											2=>'Hair',
											3=>'Lips',
											4=>'Neck',
											5=>'Arms',
											6=>'Hands',
											7=>'Chest',
											8=>'Butt',
											9=>'Legs',
											10=>'Calves',
											11=>'Feet',
											100=>'Not on the list');
									
		$this->dating_smoke = array(1=>'No',
									2=>'Socially',
									3=>'Occasionally',
									4=>'Regularly',
									5=>'Heavily',
									6=>'Trying to Quit',
									7=>'Quit');
		
		$this->dating_drink = array(1=>'No',
									2=>'Socially',
									3=>'Occasionally',
									4=>'Regularly',
									5=>'Heavily');
		
		$this->dating_occupation  =   array(1=>'Technology',
											2=>'Sales',
											3=>'Finance',
											4=>'Marketing',
											5=>'Medical &amp; Science',
											6=>'Human Resources',
											7=>'Legal',
											8=>'Other');
											
		$this->dating_annual_income = array(1=>'&lt; $25,000',
											2=>'$25,001 - $50,000',
											3=>'$50,001 - $100,000',
											4=>'$100,001 - $200,000',
											5=>'&gt; $200,001');
											
		$this->dating_currently_living = array(1=>'alone',
											2=>'with roommate(s)',
											3=>'with partner',
											4=>'with pet(s)',
											5=>'with kid(s)',
											6=>'with parents',
											7=>'friends visit often',
											8=>'party every night');
											
		$this->dating_have_kids = array(1=>'No',
										2=>'Yes- at home fulltime',
										3=>'Yes - at home parttime',
										4=>'Yes - but not at home',
										100=>'Other');
										
		$this->dating_have_pet= array(1=>'Yes',2=>'No');
		
		
		$this->dating_interest = array(1=>'Arts',
										2=>'Theatre',
										3=>'Community Service',
										4=>'Travel',
										5=>'Dancing',
										6=>'Cooking',
										7=>'Dining',
										8=>'Computers / Internet',
										9=>'Gaming',
										10=>'Movies',
										11=>'Television',
										12=>'Listening to Music',
										13=>'Gardening',
										14=>'Outdoor Activities',
										15=>'Crafts',
										16=>'Photography',
										17=>'Reading',
										18=>'Playing Sports',
										19=>'Religion / Spirituality',
										20=>'Health / Fitness',
										21=>'Watching Sports');
										
		$this->dating_political_views =   array(1=>'Very Conservative',
												2=>'Conservative',
												3=>'Middle of the Road',
												4=>'Liberal',
												5=>'Very Liberal',
												6=>'Not Political',
												100=>'Other');	
		
		$this->dating_sense_of_humour =   array(1=>'Friendly',
												2=>'Slapstick',
												3=>'Clever / Quick Witted',
												4=>'Obscure',
												5=>'Dry / Sarcastic',
												6=>'Raunchy',
												7=>'Campy / Cheesy',
												8=>'Goofy',
												100=>'Other');	
												
		$this->dating_sort_my_matches =   array('popular'=>'Only Popularity',
												'last_login'=>'Only Last login date');	
		
		$this->dating_plan[0][0] = 'Free 3 Months Subscription';//plan name
		$this->dating_plan[0][1] = '0.00';//amount
		$this->dating_plan[0][2] = '3'; //valid for 
		$this->dating_plan[0][3] = 'month'; //valid for month
		
		$this->dating_plan[1][0] = '1 Month Subscription';
		$this->dating_plan[1][1] = '22.95'; 
		$this->dating_plan[1][2] = '1'; //valid for 
		$this->dating_plan[1][3] = 'month'; //valid for month
		
		$this->dating_plan[2][0] = '3 Months Subscription';
		$this->dating_plan[2][1] = '16.95';
		$this->dating_plan[2][2] = '3'; //valid for 
		$this->dating_plan[2][3] = 'month'; //valid for month
		
		$this->dating_plan[3][0] = '6 Months Subscription';
		$this->dating_plan[3][1] = '12.95';
		$this->dating_plan[3][2] = '6'; //valid for 
		$this->dating_plan[3][3] = 'month'; //valid for month
		
		$this->dating_plan[4][0] = '12 Months Subscription';
		$this->dating_plan[4][1] = '9.95';
		$this->dating_plan[4][2] = '12'; //valid for 
		$this->dating_plan[4][3] = 'month'; //valid for month
												

		$this->paypal_duration['month'] = 'M';
		/* Dating Section Array - END */
	}
	
		//Added by Puru
		function sal_num1($val)
		{
			$count = 0;
			/*if(array_key_exists($val, $this->salary))
			{*/	
				return $this->sal_num[$val];
			/*}
			else
			{
				return '';
			}*/		
		}

	function get_dating_plan_end_date($plan_id)
	{
		$plan_name 	= 	$this->dating_plan[$plan_id][0];
		$plan_cost 	= 	$this->dating_plan[$plan_id][1];
		$plan_no 	=	$this->dating_plan[$plan_id][2];
		$plan_flag 	=	$this->dating_plan[$plan_id][3];
		
		$months	=	0;
		$days	=	0;
		$years	=	0;
		switch($plan_flag)
		{
			case 'month' :
				$months	= $plan_no;
				break;
			
			case 'day' :
				$days	= $plan_no;
				break;
			
			case 'year' :
				$years	= $plan_no;
				break;
			
			default :
				$months	=0;
				$days	=0;
				$years	=0;
				break;
			
		}
		$strdate = mktime(0, 0, 0, date("m")+$months , date("d")+$days, date("Y")+$years);
		
		return (date("Y-m-d",$strdate));
	}
	
	function get_drop_down($flag=false,$selection = '')
	{
		$drop_down_arr = array();
		
		switch($flag)
		{
			case 'gender' 			: $drop_down_arr = $this->dating_gender; break;
			case 'looking_for' 		: $drop_down_arr = $this->dating_looking_for; break;
			case 'ethnicity' 		: $drop_down_arr = $this->dating_ethnicity; break;
			case 'dating_status' 	: $drop_down_arr = $this->dating_status; break;
			case 'religion' 		: $drop_down_arr = $this->dating_religion; break;
			case 'body_type' 		: $drop_down_arr = $this->dating_body_type; break;
			case 'star_sign' 		: $drop_down_arr = $this->dating_star_sign; break;
			case 'dating_eyes' 		: $drop_down_arr = $this->dating_eyes; break;
			case 'dating_hair' 		: $drop_down_arr = $this->dating_hair; break;
			case 'dating_art' 		: $drop_down_arr = $this->dating_art; break;
			case 'best_feature' 	: $drop_down_arr = $this->dating_best_feature; break;
			case 'dating_smoke' 	: $drop_down_arr = $this->dating_smoke; break;
			case 'dating_drink' 	: $drop_down_arr = $this->dating_drink; break;
			case 'occupation' 		: $drop_down_arr = $this->dating_occupation; break;
			case 'annual_income' 	: $drop_down_arr = $this->dating_annual_income; break;
			case 'currently_living' : $drop_down_arr = $this->dating_currently_living; break;
			case 'have_kids' 		: $drop_down_arr = $this->dating_have_kids; break;
			case 'have_pet' 		: $drop_down_arr = $this->dating_have_pet; break;
			case 'interest' 		: $drop_down_arr = $this->dating_interest; break;
			case 'political_views' 	: $drop_down_arr = $this->dating_political_views; break;
			case 'sense_of_humour' 	: $drop_down_arr = $this->dating_sense_of_humour; break;
			case 'my_matches'		: $drop_down_arr = $this->dating_sort_my_matches; break;
			default					: $drop_down_arr = array(); break;
		}
		
		foreach ($drop_down_arr as $key=>$value)
		{
		?><option value="<?=$key?>" <?php echo ($selection == $key && $selection!='')?'selected="selected"':"";?>><?=$value?></option><?php	
		}    
		
	}
	
	function get_checked_list($flag=false,$checked_arr = array())
	{
		switch($flag)
		{
			case 'interested_in' 	: $check_box_arr = $this->dating_interested_in; break;
			case 'dating_art' 		: $check_box_arr = $this->dating_art; break;
			case 'currently_living' : $check_box_arr = $this->dating_currently_living; break;
			case 'interest' 		: $check_box_arr = $this->dating_interest; break;
			case 'sense_of_humour' 	: $check_box_arr = $this->dating_sense_of_humour; break;
			default					: $check_box_arr = array(); break;
		}
		
		$StrChecked = '';
		
		if(count($checked_arr))
		{
			$StrChecked0 = '';
			foreach($checked_arr as $k=>$val)
			{
				if(in_array($val,$checked_arr))
				$StrChecked0 .= $check_box_arr[$val].', ';
			}
			if($StrChecked0)	
			$StrChecked = substr($StrChecked0,0,-2);
		}
		return $StrChecked;
	}
	function Gender($selection = ''){
		$gender	 = 	$this->dating_gender;		
		foreach ($gender as $key=>$value){
		?><option value="<?=$key?>" <?php echo ($selection == $key && $selection!='')?'selected="selected"':"";?>><?=$value?></option><?php	
		}                                      
	}
	
	function LookingFor($selection = ''){
		$looking_for	 = 	$this->dating_looking_for;
		foreach ($looking_for as $key=>$value){
		?><option value="<?=$key?>" <?php echo ($selection  == $key && $selection!='')?'selected="selected"':"";?>><?=$value?></option><?php	
		}                                      
	}
	
	
	function Ethnicity($selection = ''){
		$ethnicity	 = 	$this->dating_ethnicity;
		foreach ($ethnicity as $key=>$value){
		?><option value="<?=$key?>" <?php echo ($selection  == $key && $selection!='')?'selected="selected"':"";?>><?=$value?></option><?php	
		}                                      
	}
	
	function DatingStatus($selection = ''){
		$status	 = 	$this->dating_status;
		foreach ($status as $key=>$value){
		?><option value="<?=$key?>" <?php echo ($selection  == $key && $selection!='')?'selected="selected"':"";?>><?=$value?></option><?php	
		}                                      
	}
	
	
	function Religion($selection = ''){
		$religion	 = 	$this->dating_religion;
		foreach ($religion as $key=>$value){
		?><option value="<?=$key?>" <?php echo ($selection  == $key && $selection!='')?'selected="selected"':"";?>><?=$value?></option><?php	
		}                                      
	}
	
	
	function BodyType($selection = ''){
		$dating_body_type	 = 	$this->dating_body_type;
		foreach ($dating_body_type as $key=>$value){
		?><option value="<?=$key?>" <?php echo ($selection  == $key && $selection!='')?'selected="selected"':"";?>><?=$value?></option><?php	
		}                                      
	}
	
	function StarSign($selection = ''){
		$dating_star_sign	 = 	$this->dating_star_sign;
		foreach ($dating_star_sign as $key=>$value){
		?><option value="<?=$key?>" <?php echo ($selection  == $key && $selection!='')?'selected="selected"':"";?>><?=$value?></option><?php	
		}                                      
	}
	
	/**
	 * Function to populate the hour list.
	 *
	 * @param string $selection
	 * @author Arup Karan
	 * @uses hour_combo
	 * @return HTML
	 */		
	function hour_combo($selection = ''){
		$hour	 	= 	$this->hour;
		foreach ($hour as $key=>$value){
		?>
		<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}   
		                                   
	}	
	
	/**
	 * Function to populate the minute list.
	 *
	 * @param string $selection
	 * @author Arup Karan
	 * @uses minute_combo
	 * @return HTML
	 */		
	function minute_combo($selection = ''){
		$minute	 	= 	$this->minute;
		foreach ($minute as $key=>$value){
		?>
		<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}   
		                                   
	}	
	
	/**
	 * Function to populate the AM PM list.
	 *
	 * @param string $selection
	 * @author Arup Karan
	 * @uses am_pm_combo
	 * @return HTML
	 */		
	function am_pm_combo($selection = ''){
		$am_pm	 	= 	$this->am_pm;
		foreach ($am_pm as $key=>$value){
		?>
		<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}   
		                                   
	}		
	
	/**
	 * Function to populate the sort alpha list.
	 *
	 * @param string $selection
	 * @author Arup Karan
	 * @uses sort_alpha_list
	 * @return HTML
	 */		
	function sort_alpha_list($selection = ''){
		$sort_alpha	 = 	$this->sort_alpha;
		foreach ($sort_alpha as $key=>$value){
		?>
		<?php if($key !='Z'){?>
		<li><a href="#nodo" class="sort_alpha <?=($selection  == $key)?'selected="selected"':''?>" title="<?=$key?>"><?=$value?></a></li>
		<?php }else {?>
		<li class="nobord"><a href="#nodo" class="sort_alpha <?=($selection  == $key)?'selected="selected"':''?>" title="Z">Z</a></li>
		<?php }?>
		
		<?php	
		}                                      
	}	
	
	
	//Date comparison function - added by Puru
	//Returns true if $en_date is greater than $st_date
	//Note that it compares only the date part and not the time
	function checkDateExpiry($st_date, $en_date)
	{
      $dateArr = explode("-",$st_date);
      $date1Int1 = mktime(0,0,0,$dateArr[1],$dateArr[2],$dateArr[0]) ;

      $dateArr = explode("-",$en_date);
      $date1Int2 = mktime(0,0,0,$dateArr[1],$dateArr[2],$dateArr[0]) ;	  
		
		if($date1Int2 > $date1Int1)
		{
			return true;
		}
		else
		{
			return false;
		}	
	}
	
	
	/**
	 * Function to populate the Forum Topic Sort Type drop down.
	 *
	 * @param string $selection
	 * @author Arup Karan
	 * @uses forumTopicSortType
	 * @return HTML
	 */		
	function groupSortType($selection = ''){
		$group_sort_type	 = 	$this->group_sort_type;
		foreach ($group_sort_type as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}
	
	
	/**
	 * Function to populate the Privacy Settings type one drop down.
	 *
	 * @param string $selection
	 * @author Arup Karan
	 * @uses privacy_settings_Combo01
	 * @return HTML
	 */		
	function privacy_settings_Combo01($selection = ''){
		$privacy_settings_01	 = 	$this->privacy_settings_01;
		foreach ($privacy_settings_01 as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}	
	
	/**
	 * Function to populate the Privacy Settings type two drop down.
	 *
	 * @param string $selection
	 * @author Arup Karan
	 * @uses $privacy_settings_02
	 * @return HTML
	 */		
	function privacy_settings_Combo02($selection = ''){
		$privacy_settings_02	 = 	$this->privacy_settings_02;
		foreach ($privacy_settings_02 as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}
	
	
	/**
	 * Function to populate the Forum Topic Sort Type drop down.
	 *
	 * @param string $selection
	 * @author Arup Karan
	 * @uses forumTopicSortType
	 * @return HTML
	 */		
	function forumTopicSortType($selection = ''){
		$forum_topic_sort_type	 = 	$this->forum_topic_sort_type;
		foreach ($forum_topic_sort_type as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}
	
	
	/**
	 * Function to populate the Blog Post Type drop down.
	 *
	 * @param string $selection
	 * @author Arup Karan
	 * @uses blogPostType
	 * @return HTML
	 */		
	function blogPostType($selection = ''){
		$blog_post_type	 = 	$this->blog_post_type;
		foreach ($blog_post_type as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}
	
	
	/**
	 * Function to populate the month drop down.
	 *
	 * @param string $month
	 * @author Arup Karan
	 * @uses Month_combo
	 * @return HTML
	 */		
	function Month_combo($month)
	{
		$month_list	=	$this->month_list;		
		foreach ($month_list as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($month  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}   
	}
	
	/**
	 * Function to populate the Year drop down.
	 *
	 * @param string $year
	 * @author Arup Karan
	 * @uses Year_combo
	 * @return HTML
	 */		
		
	function Year_combo($year)
	{
		$curr_year	=	date('Y');?>
		
		<option value="">Year</option>		
		<?
		for($i=1930;$i<=$curr_year-5;$i++)
		{?>	
		<option value="<?=$i?>" <?php echo ($i	==	$year)?'selected="selected"':"";?>><?=$i?></option>			
		<?php
		}
	}	
	
	/**
	 * Function to populate the Year drop down.
	 *
	 * @param string $year
	 * @author Arup Karan
	 * @uses Year_combo
	 * @return HTML
	 */		
		
	function edu_year_combo($year='')
	{
		$curr_year	=	date('Y');?>
		<?
		for($i=1970;$i<=$curr_year+5;$i++)
		{?><option value="<?=$i?>" <?php echo ($i	==	$year)?'selected="selected"':"";?>><?=$i?></option><?php }
	}	
	
	/**
	 * Function to populate the Year drop down.
	 *
	 * @param string $year
	 * @author Arup Karan
	 * @uses Year_combo
	 * @return HTML
	 */		
		
	function edu_from_year_combo($year='')
	{
		$curr_year	=	date('Y');?>
		<?
		for($i=1970;$i<=$curr_year;$i++)
		{?><option value="<?=$i?>" <?php echo ($i	==	$year)?'selected="selected"':"";?>><?=$i?></option><?php }
	}	
	
	/**
	 * Function to populate the Year drop down.
	 *
	 * @param string $year
	 * @author Arup Karan
	 * @uses Year_combo
	 * @return HTML
	 */		
		
	function edu_staff_year_combo($year='')
	{
		$curr_year	=	date('Y');?>
		<?
		for($i=1970;$i<=$curr_year;$i++)
		{?><option value="<?=$i?>" <?php echo ($i	==	$year)?'selected="selected"':"";?>><?=$i?></option><?php }
	}	
	
	/**
	 * Function to populate the days drop down.
	 *
	 * @param string $days
	 * @author Jignesh Chauhan
	 * @uses Days_combo
	 * @return HTML
	 */		

	function Days_combo($days)
	{
	?>
		<option value="">Day</option>		
	<?php	
		for($i=1;$i<=31;$i++) {
		?>
			<option value="<?=$i?>" <?php echo ($days == $i)?'selected="selected"':"";?>><?=$i?></option>
		<?php	
		}   
	}

	/**
	 * Function to populate the state drop down.
	 *
	 * @param string $state
	 * @author Arup Karan
	 * @uses state_combo
	 * @return HTML
	 */		
	function state_combo($state=false)
	{
		$state_list	=	$this->state_list;		
		foreach ($state_list as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($state  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}   
	}
		
	function state_combo2($state)
	{
		$state_list	=	$this->state_list2;		
		foreach ($state_list as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($state == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}   
	}
		
	/**
	 * Function to populate the state drop down.
	 *
	 * @param string $state
	 * @author Arup Karan
	 * @uses state_combo
	 * @return HTML
	 */		
	function country($selection = ''){
		$country	 = 	$this->country;
		foreach ($country as $key=>$value){
		?><option value="<?=$key?>" <?php echo ($selection  == $key)? 'selected="selected"':"";?>><?=$value?></option><?php	
		}                                      
	}

	/**
	 * Function to populate the state drop down.
	 *
	 * @param string $state
	 * @author Arup Karan
	 * @uses state_combo
	 * @return HTML
	 */		
	function age_list($selection = ''){
		for($i=18;$i<=50;$i++){
		?>
			<option value="<?=$i?>" <?php echo ($selection  == $i)?'selected="selected"':"";?>><?=$i?></option>
		<?php	
		} 
		?>
			<option value="50+" <?php echo ($selection  == "50+")?'selected="selected"':"";?>>50+</option>
		<?php
	}

	function qual($selection = '')
	{
		$qual	 = 	$this->qual;
		foreach ($qual as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
			<?php
		}                                      
	}
	//Added by Puru. Similar to the country function except this one returns a string instead of numbers for value
	function country1($selection = ''){
		$country2	 = 	$this->country1;
		foreach ($country2 as $key=>$value){
		?>
		<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}
	
	function country2($selection = ''){
		$country3	 = 	$this->country2;
		foreach ($country3 as $key=>$value){
		?>
		<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}	

	/*function occ_cat($selection = ''){
	
	
		$occ_cat2	 = 	$this->occ_cat;
		foreach ($occ_cat2 as $key=>$value){
		?>
		<option value="<?=$key?>" <?php echo ($selection  == $key)?"selected":"";?>><?=$value?></option>
		<?php	
		}                                      
	}*/
	
	function occ_cat2($selection = ''){
		$occ_cat2	 = 	$this->occ_cat2;
		foreach ($occ_cat2 as $key=>$value){
		?>
		<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}	
	
	function pos_type($selection = '')
	{
		$list1	 = 	$this->pos_type;		
		foreach ($list1 as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}		
	
	function general($selection = '')
	{
		$list1	 = 	$this->$list;		
		foreach ($list1 as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}		
	
	//Function for year
	function year($selection = '100'){	
		
		if($selection === '')
		{
			$selection = '100';			
		}	
		$year	 = 	$this->year;
		foreach ($year as $key=>$value){
		?>
			<option value="<?=$key?>" <?=($selection == $key)?'selected="selected"':""?> ><?=$value?></option>
		<?php	
		}                                      
	}

	//Function for months
	function months($selection = '101'){	

		if($selection === '')
		{
			$selection = '101';
		}	
		$months	 = 	$this->months;		
		foreach ($months as $key=>$value){
		?>
			<option value="<?=$key?>" <?=($selection == $key)?'selected="selected"':""?>><?=$value?></option>
		<?php	
		}                         		
	}

	function salary($selection = ''){
		$salary	 = 	$this->salary;
		foreach ($salary as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}

	function salary2($selection = ''){
		$salary2	 = 	$this->salary2;
		foreach ($salary2 as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}

	function institute($selection = ''){
		$institute	 = 	$this->institute;
		foreach ($institute as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  === $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}

	function is_institute_exist($selection = ''){
		$institute	 = 	$this->institute;
		foreach ($institute as $key=>$value)
		{
			//echo $selection."==".$value."<br>";
			if($selection  == $value)
				return true;
		}                                    

		return false;
	}
	
	function pass_year($selection = ''){
		$pass_year	 = 	$this->pass_year;
		foreach ($pass_year as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}
	

	//Function for months
	function level($selection = ''){
		$level	 = 	$this->level;
		foreach ($level as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}
	
	function level2($selection = ''){
		$level	 = 	$this->level2;
		foreach ($level as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}	
		
	/**
	 * Function to populate the network category drop down.
	 *
	 * @param string $select
	 * @author Jignesh Chauhan
	 * @uses network_category
	 * @return HTML
	 */		
	function network_category($selection = ''){
		$network_category	 = 	$this->network_category;
		foreach ($network_category as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}
	
	// Added by Purushottam
	function industry($selection = ''){
		$industry	= 	$this->industry_list;
		foreach ($industry as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}
	
	
	// Added by Deepak
	function banner_width_combo($selection = ''){
		$banner_width	= 	$this->banner_width;
		foreach ($banner_width as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}
	
	// Added by Deepak
	function banner_height_combo($selection = ''){
		$banner_height	= 	$this->banner_height;
		foreach ($banner_height as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}
	
	
	// Added by Deepak
	function desire_campaign($selection = ''){
		$desire_campaign	= 	$this->desire_campaign_list;
		foreach ($desire_campaign as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}
	// Added by Deepak
	function banner_size($selection = ''){
		$banner_size	= 	$this->banner_size_list;
		foreach ($banner_size as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}
	
	// Added by Deepak
	function advertise_industry($selection = ''){
		$advertise_industry	= 	$this->advertise_industry_list;
		foreach ($advertise_industry as $key=>$value){
		?>
			<option value="<?=$key?>" <?php echo ($selection  == $key)?'selected="selected"':"";?>><?=$value?></option>
		<?php	
		}                                      
	}
	
	//Added by Puru
	function check($selection, $list)
	{
		switch ($list)
		{
			case 'industry':
					if(preg_match('/Other.*/i', $selection))
						 return true;
					else
						 return false;
					break;
			case 'qual':
					if(preg_match('/Other/i', $selection))
						 return true;
					else
						 return false;
					break;
			case 'institute':
					if(preg_match('/Other/i', $selection))
						 return true;
					else
						 return false;
					break;
		}
	}    		
	
	/**
	 * Function to populate the array with addslashes.
	 *
	 * @param array $value
	 * @author Arup Karan
	 * @uses custom_addslashes_array($value)
	 * @return array with addslashes
	 */	

	function custom_addslashes_array($value)
	{
	    $array = array();
		/*
		if(get_magic_quotes_gpc())
		{
			return $value;
		}
		else
		{
		*/
		   if(!empty($value))
		    {
				foreach($value as $key=>$value1)
				 {
					$array["$key"] = addslashes($value1);
				 }
				
			}
			return $array;
		//}
	}
	
	/**
	 * Function to populate the string with addslashes.
	 *
	 * @param string $value
	 * @author Arup Karan
	 * @uses custom_addslashes($value)
	 * @return string with addslashes
	 */	
		
	function custom_addslashes($value)
	{
		//CodeIgniter Always removes effect of magic quotes so that input data is always be unslashed by defalut.
		/*
		if(get_magic_quotes_gpc())
		{
			return $value;
		}
		else
		{
		*/
			return addslashes($value);
		//}
	}
	
	/**
	 * Function to populate the array with stripslashes.
	 *
	 * @param array $value
	 * @author Arup Karan
	 * @uses custom_stripslashes_array($value)
	 * @return array with stripslashes
	 */	
		
	function custom_stripslashes_array($value)
	{
	    $array = array();
		/*
		if(get_magic_quotes_gpc())
		{
			return $value;
		}
		else
		{
		*/
			if(!empty($value))
		    {			
				foreach($value as $key=>$value1)
				 {
					$array["$key"] = stripslashes($value1);
				 }
			}
			return $array;
		//}
	}	
	
	/**
	 * Function to populate the string with stripslashes.
	 *
	 * @param string $value
	 * @author Arup Karan
	 * @uses custom_stripslashes($value)
	 * @return string with stripslashes
	 */	
		
	function custom_stripslashes($value)
	{
		/*
		if(get_magic_quotes_gpc())
		{
			return $value;
		}
		else
		{
		*/	
			return stripslashes($value);
		//}	
	}	
	
	/**
	 * Function to populate the string with htmlentities.
	 *
	 * @param string $value
	 * @author Arup Karan
	 * @uses custom_htmlentities($value)
	 * @return string with htmlentities
	 */
		
	function custom_htmlentities($value)
	{
		//return htmlentities($value);
		return $this->unicode_htmlentities($value);
	}
	
	/**
	 * Function to populate the array with htmlentities.
	 *
	 * @param array $value
	 * @author Arup Karan
	 * @uses custom_htmlentitiesarray($value)
	 * @return array with htmlentities
	 */
		
	function custom_htmlentitiesarray($value)
	{
	 	$array = array();
				
		foreach($value as $key=>$value1)
		 {
		 	if(!is_array($value1))
			//$array["$key"] = htmlentities($value1);
			$array["$key"] = $this->unicode_htmlentities($value1);
		 }
		return $array;	
	}
	
	/**
	 * Function to populate the pagination.
	 *
	 * @param $pageNo, $pagelimit, $totalROW, $pageurl, $front_base_url
	 * @author Arup Karan
	 * @uses paginationLink
	 * @return string pagination link
	 */
		
	function paginationLink($pageNo, $pagelimit, $totalROW, $pageurl){
		$paginShow = "";
		$leftLink= "";
		$pageLink1= "";
		$rightLink= "";
		$total_pages = 0;
		$page = (($pageNo>0)?$pageNo:1);
		
		$page_wider = 10;	
		$page_shift = 5;	

		if ($totalROW>$pagelimit)
		{
  

        $total_pages	=	ceil($totalROW/$pagelimit);
       // $numPage 		=	$total_pages;
        $page = (($pageNo>0)?$pageNo:1);
        
        $page_end = $page_wider+1;
        $page_start=1;  
        
            //if more pages than max links
        
        if($total_pages>=$page_end){
        
                //if page is greater than shifing page and the last page is not there
        
            if(($page>=$page_end-$page_shift)&&($page<=$total_pages-$page_shift)){  
            
                //set the loop values based on the current page
            
                $page_end = $page+$page_shift;
                $page_start=$page_end-$page_wider;
            }
            
            //if the last link is visible then set the top of the loop to
            // the total_pages
            // otherwise we get links to pages with no results
            
            if($page>=$total_pages-$page_shift+1){
                //$page_end = $total_pages+1;
                $page_end = $total_pages;
                $page_start=$page_end-$page_wider;
            } 
        }
        
        //if less pages than max links then set the top of the loop to total pages
        
        else{
            $page_start=1;
            $page_end = $total_pages;
        }

        ###############################################
			
			for ($i = $page_start; $i<=$page_end; $i++)
			{
				$pageNum = $i;
				if ($page==$i)
				{
///					$pageLink1 .= " <a href='".$pageurl.$pageNum."'  class=\"white\">$pageNum</a> ";
					//$pageLink1 .= $pageNum;
					$pageLink1 .= "&nbsp;<span class='white'>[$pageNum]</span>&nbsp;";
				}
				else
				{
					$pageLink1 .= " <a href='".$pageurl.$pageNum."' class=\"white\">$pageNum</a> ";
				}
			}
		}

		if ($page>1)
		{
			//$leftLink = "<li><a href='".$pageurl.($page-1)."'><span class='bold' style='float:none'>«</span></a></li>";
			$leftLink = "<strong>&laquo;</strong> <a href='".$pageurl.($page-1)."' class=\"white\"><strong>Previous</strong></a>";
			
			
			//$leftLink .= "&nbsp;<a href='".$pageurl.($page-1)."' class='white' >&laquo; Previous</a>&nbsp;";
		}

	
		if ($page<$total_pages)
		{
			$page = $page+1;
			$page = ($page > $total_pages )?$page-1:$page;
			
			//$rightLink = "&nbsp;<a href='".$pageurl.$page."' class='white'>Next &raquo;</a>&nbsp;";
			//$rightLink .= "<a href='".$pageurl.$page."'><span class='bold' style='float:none'>»</span></a>";
			//$rightLink .= "...<strong> <a href='".$pageurl.$page."' class=\"white\">Next</a></strong> <strong>&raquo;</strong>";
			$rightLink .= "<strong> <a href='".$pageurl.$page."' class=\"white\">Next</a></strong> <strong>&raquo;</strong>";
			
			
		}
		
				
		$paginShow = $leftLink.$pageLink1.$rightLink;
		return $paginShow;

	}
	
	
	function showPage($pageNo, $pagelimit, $totalROW, $result_name=""){
		$showPage ='';
		if ($totalROW>0){	
			 $pageNo 				=		$pageNo;
			 $pageNo 				=		($pageNo==0)?1:$pageNo;
			 $showing_page_from 	=		(($pageNo-1)*($pagelimit))+1;
			 $showing_page_to 		= 		$pageNo*$pagelimit;
			 $showing_page_to 		= 		($totalROW>$showing_page_to)?$showing_page_to:$totalROW;
			 $showPage = "Displaying&nbsp;". $showing_page_from."&nbsp;-&nbsp;".$showing_page_to. "&nbsp;of&nbsp;".$totalROW."&nbsp;". $result_name."&nbsp;";
			}
			 return $showPage;
		
			 
	}
	
	function showPageHeader($pageNo, $pagelimit, $totalROW){
		$showPage ='';
		if ($totalROW>0){	
			 $pageNo 				=		$pageNo;
			 $pageNo 				=		($pageNo==0)?1:$pageNo;
			 $showing_page_from 	=		(($pageNo-1)*($pagelimit))+1;
			 $showing_page_to 		= 		$pageNo*$pagelimit;
			 $showing_page_to 		= 		($totalROW>$showing_page_to)?$showing_page_to:$totalROW;
			 $showPage = $showing_page_from."&nbsp;-&nbsp;".$showing_page_to. "&nbsp;of&nbsp;".$totalROW."&nbsp;Photos&nbsp;";
			}
			 return $showPage;
		
			 
	}

	function showPageSearch($pageNo, $pagelimit, $totalROW, $result_name=""){
		$showPage ='';
		if ($totalROW>0){	
			 $pageNo 				=		$pageNo;
			 $pageNo 				=		($pageNo==0)?1:$pageNo;
			 $showing_page_from 	=		(($pageNo-1)*($pagelimit))+1;
			 $showing_page_to 		= 		$pageNo*$pagelimit;
			 $showing_page_to 		= 		($totalROW>$showing_page_to)?$showing_page_to:$totalROW;
			 $showPage = "Displaying&nbsp;". $showing_page_from."&nbsp;-&nbsp;".$showing_page_to. "&nbsp;of&nbsp;".$totalROW."&nbsp;results for&nbsp;'". $result_name."'&nbsp;";
			}
			 return $showPage;
		
			 
	}

	function commentsShowPageHeader($pageNo, $pagelimit, $totalROW){
		$showPage ='';
		if ($totalROW>0){	
			 $pageNo 				=		$pageNo;
			 $pageNo 				=		($pageNo==0)?1:$pageNo;
			 $showing_page_from 	=		(($pageNo-1)*($pagelimit))+1;
			 $showing_page_to 		= 		$pageNo*$pagelimit;
			 $showing_page_to 		= 		($totalROW>$showing_page_to)?$showing_page_to:$totalROW;
			 $showPage = $showing_page_from."&nbsp;to&nbsp;".$showing_page_to. "&nbsp;of&nbsp;".$totalROW."&nbsp;Photos&nbsp;";
			}
			 return $showPage;
		
			 
	}
	/**
	 * Function to populate the pagination.
	 *
	 * @param $pageNo, $pagelimit, $totalROW, $pageurl, $front_base_url
	 * @author Arup Karan
	 * @uses paginationLink
	 * @return string pagination link
	 */
		
	function paginationLink2($pageNo, $pagelimit, $totalROW, $pageurl){
		$paginShow = "";
		$leftLink= "";
		$pageLink1= "";
		$rightLink= "";
		$total_pages = 0;
		$page = (($pageNo>0)?$pageNo:1);
		
		$page_wider = 10;	
		$page_shift = 5;	

		if ($totalROW>$pagelimit)
		{
  

        $total_pages	=	ceil($totalROW/$pagelimit);
       // $numPage 		=	$total_pages;
        $page = (($pageNo>0)?$pageNo:1);
        
        $page_end = $page_wider+1;
        $page_start=1;  
        
            //if more pages than max links
        
        if($total_pages>=$page_end){
        
                //if page is greater than shifing page and the last page is not there
        
            if(($page>=$page_end-$page_shift)&&($page<=$total_pages-$page_shift)){  
            
                //set the loop values based on the current page
            
                $page_end = $page+$page_shift;
                $page_start=$page_end-$page_wider;
            }
            
            //if the last link is visible then set the top of the loop to
            // the total_pages
            // otherwise we get links to pages with no results
            
            if($page>=$total_pages-$page_shift+1){
                //$page_end = $total_pages+1;
                $page_end = $total_pages;
                $page_start=$page_end-$page_wider;
            } 
        }
        
        //if less pages than max links then set the top of the loop to total pages
        
        else{
            $page_start=1;
            $page_end = $total_pages;
        }

        ###############################################
			
			for ($i = $page_start; $i<=$page_end; $i++)
			{
				$pageNum = $i;
				if ($page==$i)
				{
					//$pageLink1 .= "<li><a href='".$pageurl.$pageNum."'  class='selected'>$pageNum</a></li>";
					$pageLink1 .= "<a href='".$pageurl."&page_no=".$pageNum."'>$pageNum</a> ";
				}
				else
				{
					$pageLink1 .= "<a href='".$pageurl."&page_no=".$pageNum."'>$pageNum</a>&nbsp;";
				}
			}
		}

		if ($page>1)
		{
			$leftLink = "<a href='".$pageurl."&page_no=".($page-1)."'><span class='bold' style='float:none'>".htmlentities('«')."</span></a>&nbsp;";
			//$leftLink .= "&nbsp;<a href='".$pageurl.($page-1)."' class='white' >&laquo; Previous</a>&nbsp;";
		}

	
		if ($page<$total_pages)
		{
			$page = $page+1;
			$page = ($page > $total_pages )?$page-1:$page;
			
			//$rightLink = "&nbsp;<a href='".$pageurl.$page."' class='white'>Next &raquo;</a>&nbsp;";
			$rightLink .= "<a href='".$pageurl."&page_no=".$page."'><span class='bold' style='float:none'>".htmlentities('»')."</span></a>&nbsp;";
		}
		
		if($totalROW > $pagelimit )
		{		
			$paginShow = "".$leftLink.$pageLink1.$rightLink."";
		}
		else
		{
			$paginShow = $leftLink.$pageLink1.$rightLink."";
		}
		return $paginShow;

	}
	
	
	
	/**
	 * Function to populate the pagination.
	 *
	 * @param $pageNo, $pagelimit, $totalROW, $pageurl, $front_base_url
	 * @author Arup Karan
	 * @uses paginationLink
	 * @return string pagination link
	 */
		
	function paginationLink3($pageNo, $pagelimit, $totalROW, $pageurl){
		
			
		$paginShow = "";
		$leftLink= "";
		$pageLink1= "";
		$rightLink= "";
		$total_pages = 0;
		$page = (($pageNo>0)?$pageNo:1);
		
		$page_wider = 10;	
		$page_shift = 5;	

		if ($totalROW>$pagelimit)
		{
  

        $total_pages	=	ceil($totalROW/$pagelimit);
       // $numPage 		=	$total_pages;
        $page = (($pageNo>0)?$pageNo:1);
        
        $page_end = $page_wider+1;
        $page_start=1;  
        
            //if more pages than max links
        
        if($total_pages>=$page_end){
        
                //if page is greater than shifing page and the last page is not there
        
            if(($page>=$page_end-$page_shift)&&($page<=$total_pages-$page_shift)){  
            
                //set the loop values based on the current page
            
                $page_end = $page+$page_shift;
                $page_start=$page_end-$page_wider;
            }
            
            //if the last link is visible then set the top of the loop to
            // the total_pages
            // otherwise we get links to pages with no results
            
            if($page>=$total_pages-$page_shift+1){
                //$page_end = $total_pages+1;
                $page_end   = $total_pages;
                $page_start = $page_end-$page_wider;
            } 
        }
        
        //if less pages than max links then set the top of the loop to total pages
        
        else{
            $page_start=1;
            $page_end = $total_pages;
        }

        ###############################################
			
			/*for ($i = $page_start; $i<=$page_end; $i++)
			{
				$pageNum = $i;
				if ($page==$i)
				{
					//$pageLink1 .= "<li><a href='".$pageurl.$pageNum."'  class='selected'>$pageNum</a></li>";
					$pageLink1 .= "<li class='selected01'>$pageNum</li>";
				}
				else
				{
					$pageLink1 .= "<li><a href='".$pageurl.$pageNum."'>$pageNum</a></li>";
				}
			}*/
		}

		if ($page>1)
		{
			$leftLink = "<li><a href='".$pageurl.(($page-1)*784654768)."'><span class='bold' style='float:none'>".htmlentities('«')."</span></a></li><li>&nbsp;</li>";
			//$leftLink = "<li><a href='".$pageurl.($page-1)."'><span class='bold' style='float:none'>".htmlentities('«')."</span></a></li><li>&nbsp;</li>";
			//$leftLink .= "&nbsp;<a href='".$pageurl.($page-1)."' class='white' >&laquo; Previous</a>&nbsp;";
		}

	
		if ($page<$total_pages)
		{
			$page = $page+1;
			$page = ($page > $total_pages )?$page-1:$page;
			
			//$rightLink = "&nbsp;<a href='".$pageurl.$page."' class='white'>Next &raquo;</a>&nbsp;";
			$rightLink .= "<li>&nbsp;</li><li><a href='".$pageurl.($page*784654768)."'><span class='bold' style='float:none'>".htmlentities('»')."</span></a></li>";
			//$rightLink .= "<li>&nbsp;</li><li><a href='".$pageurl.$page."'><span class='bold' style='float:none'>".htmlentities('»')."</span></a></li>";
		}
		
				
		$paginShow = "<ul>".$leftLink.$pageLink1.$rightLink."</ul>";
		return $paginShow;

	}
	
	/**
	 * Function to populate the pagination.
	 *
	 * @param $pageNo, $pagelimit, $totalROW, $pageurl, $front_base_url
	 * @author Arup Karan
	 * @uses paginationLink
	 * @return string pagination link
	 */
		
	function paginationLinkWeb($pageNo, $pagelimit, $totalROW, $pageurl, $searchTerm=''){
		$paginShow = "";
		$leftLink= "";
		$pageLink1= "";
		$rightLink= "";
		$total_pages = 0;
		$page = (($pageNo>0)?$pageNo:1);
		
		$page_wider = 10;	
		$page_shift = 5;	

		if ($totalROW>$pagelimit)
		{
  

        $total_pages	=	ceil($totalROW/$pagelimit);
       // $numPage 		=	$total_pages;
        $page = (($pageNo>0)?$pageNo:1);
        
        $page_end = $page_wider+1;
        $page_start=1;  
        
            //if more pages than max links
        
        if($total_pages>=$page_end){
        
                //if page is greater than shifing page and the last page is not there
        
            if(($page>=$page_end-$page_shift)&&($page<=$total_pages-$page_shift)){  
            
                //set the loop values based on the current page
            
                $page_end = $page+$page_shift;
                $page_start=$page_end-$page_wider;
            }
            
            //if the last link is visible then set the top of the loop to
            // the total_pages
            // otherwise we get links to pages with no results
            
            if($page>=$total_pages-$page_shift+1){
                //$page_end = $total_pages+1;
                $page_end = $total_pages;
                $page_start=$page_end-$page_wider;
            } 
        }
        
        //if less pages than max links then set the top of the loop to total pages
        
        else{
            $page_start=1;
            $page_end = $total_pages;
        }

        ###############################################
			
			for ($i = $page_start; $i<=$page_end; $i++)
			{
				$pageNum = $i;
				if ($page==$i)
				{
					//$pageLink1 .= "<li><a href='".$pageurl.$pageNum."'  class='selected'>$pageNum</a></li>";
					$pageLink1 .= "<li class='selected01'>$pageNum</li>";
				}
				else
				{
					$startRec = $pageNum*4 ;
				
					if($pageNum>=15)
						$pageLink1 .= "<li><a href='http://www.google.com/search?oe=utf8&ie=utf8&source=uds&start=".$startRec."&hl=en&q=".$searchTerm."' target='_blank'>$pageNum</a></li>";
					else
						$pageLink1 .= "<li><a href='".$pageurl.$pageNum."'>$pageNum</a></li>";
				}
			}
		}

		if ($page>1)
		{
			$startRec = ($page-1)*4 ;
				
			if($page>=15)
				$leftLink .= "<li><a href='http://www.google.com/search?oe=utf8&ie=utf8&source=uds&start=".$startRec."&hl=en&q=".$searchTerm."' target='_blank'><span class='bold' style='float:none'>".htmlentities('«')."</span></a></a></li>";
			else
				$leftLink = "<li><a href='".$pageurl.($page-1)."'><span class='bold' style='float:none'>".htmlentities('«')."</span></a></li>";
			//$leftLink .= "&nbsp;<a href='".$pageurl.($page-1)."' class='white' >&laquo; Previous</a>&nbsp;";
		}

	
		if ($page<$total_pages)
		{
			$page = $page+1;
			$page = ($page > $total_pages )?$page-1:$page;
			
			//$rightLink = "&nbsp;<a href='".$pageurl.$page."' class='white'>Next &raquo;</a>&nbsp;";
			$startRec = $page*4 ;
				
			if($page>=15)
				$pageLink1 .= "<li><a href='http://www.google.com/search?oe=utf8&ie=utf8&source=uds&start=".$startRec."&hl=en&q=".$searchTerm."' target='_blank'><span class='bold' style='float:none'>".htmlentities('»')."</span></a></li>";
			else
				$rightLink .= "<li><a href='".$pageurl.$page."'><span class='bold' style='float:none'>".htmlentities('»')."</span></a></li>";
		}
		
				
		$paginShow = "<ul>".$leftLink.$pageLink1.$rightLink."</ul>";
		return $paginShow;

	}
	
	
	/**
	 * Function to populate the start page for pagination.
	 *
	 * @param $pageNo, $pagelimit
	 * @author Arup Karan
	 * @uses startPage
	 * @return integer number.
	 */
	
	function startPage($pageNo, $pagelimit){
		$start ="";
		$start = (($pageNo>0)?$pageNo:1);
		$start--;						
		return $startPage = ($start*$pagelimit);	
	}
	
	
	/**
	 * Function to populate the string break for a given length.
	 *
	 * @param $string, $len
	 * @author Arup Karan
	 * @uses tep_break_string
	 * @return string.
	 */
		
	function tep_break_string($string, $len) {
		
		$output = ((strlen($string) >= $len) ? substr($string, 0, $len).'..' : $string);
		
		return $output;
	}	
	
	/**
	 * Function to populate the Real Ip Address.
	 *
	 * @param 
	 * @author Arup Karan
	 * @uses getRealIpAddr
	 * @return ip number.
	 */
	
	function getRealIpAddr()
	{
	 if (!empty($_SERVER['HTTP_CLIENT_IP']))
	 //check ip from share internet
	 {
	   $ip=$_SERVER['HTTP_CLIENT_IP'];
	 }
	 elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
	 //to check ip is pass from proxy
	 {
	   $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	 }
	 else
	 {
	   $ip=$_SERVER['REMOTE_ADDR'];
	 }
	 return $ip;
	}	
	
	/**
	 * Function to populate the HTTP Details.
	 *
	 * @param $_SERVER
	 * @author Arup Karan
	 * @uses getHTTPDetails
	 * @return stirng of http details.
	 */	
	function getHTTPDetails($server){
		
		$http_all = 'IP Address: '.$this->getRealIpAddr().'<br /><br />';
		$http_all .= 'HTTP_ACCEPT: '.$server['HTTP_ACCEPT'].'<br /><br />';
		$http_all .='HTTP_ACCEPT_LANGUAGE: '.$server['HTTP_ACCEPT_LANGUAGE'].'<br /><br />';
		$http_all .='HTTP_CONNECTION: '.$server['HTTP_CONNECTION'].'<br /><br />';
		$http_all .='HTTP_HOST: '.$server['HTTP_HOST'].'<br /><br />';
		$http_all .='HTTP_REFERER: '.$server['HTTP_REFERER'].'<br /><br />';
		$http_all .='HTTP_USER_AGENT: '.$server['HTTP_USER_AGENT'].'<br /><br />';
		$http_all .='HTTP_COOKIE: '.$server['HTTP_COOKIE'].'<br /><br />';
		//$http_all .='HTTP_ACCEPT_ENCODING: '.$server['HTTP_ACCEPT_ENCODING'];
		
		return $http_all;
	}


  function tep_date_format($raw_date) 
   {

   	if ($raw_date == '') return false;
	list($month,$day,$year) = explode("-", $raw_date);
	
	return  $year."-".$month."-".$day;
  }
  
  function tep_date_format1($raw_date) 
   {

   	if ($raw_date == '') return false;
	list($year,$month,$day) = explode("-", $raw_date);
	
	return  $month."-".$day."-".$year;
  }
   
  function tep_date_format2($raw_date){
  		if($raw_date=="" || $raw_date=="0000-00-00") return '';
		list($year,$month,$day) = explode("-", $raw_date);	
		return date('j', mktime(0,0,0,$month,$day,$year));
    } 
  
  function date_diff($dateto, $datefrom) {
 
	$datefrom = strtotime($datefrom, 0);
	$dateto = strtotime($dateto, 0);
	
	$difference = $dateto - $datefrom; // Difference in seconds
	
	
	  $datediff = floor($difference / 86400);
	
	return $datediff;
	
	}
	
  //Added by Puru - for companring dates
  // If the first date is higher than the second, it returns TRUE
  // otherwise it returns FALSE 	
  function date_comp($datecurr, $datestore) {
 
//	echo $date_1    = date("s",strtotime($datecurr));
//	echo $date_1    = date("s",strtotime($datestore));
//	exit;
	$dateto = strtotime($datecurr, 0);
	$datefrom = strtotime($datestore, 0);
	$difference = $dateto - $datefrom; // Difference in seconds
	
	if($difference > 0)
	{
	    return true;
	}
	else
	{
		return false;
	}
 }

	function hours_diff($datefrom, $dateto){
		
	$datefrom = strtotime($datefrom, 0);
	$dateto = strtotime($dateto, 0);
	
	 $difference = $datefrom - $dateto; // Difference in seconds
	 
	//return $difference = floor($difference /3600); // Difference in hours	
	return $difference = $difference /3600; // Difference in hours	
	}	
	
	function minutes_diff($datefrom, $dateto){
		
	$datefrom = strtotime($datefrom, 0);
	$dateto = strtotime($dateto, 0);
	
	 $difference = $datefrom - $dateto; // Difference in seconds
	 
	//return $difference = floor($difference /3600); // Difference in hours	
	return $difference = $difference /60; // Difference in hours	
	}
	
	/**
	 * Function to add no of days to date.
	 *
	 * @param date $input_date
	 * @param int $adding_date
	 * @return new date
	 *  
	 */
	function date_addition($input_date, $adding_date)
	{
		if($input_date != ""){
			$dateArry = explode("-", $input_date);
			
			$Y=$dateArry[0];
			$m=$dateArry[1];
			$d=$dateArry[2]+$adding_date;
		
			//	$m="03"; $d="28"; $Y="2008";//put here server day,month,year...
			$expiry_alert_date = mktime(0,0,0,date($m),date($d),date($Y));
			$final_date=date("Y-m-d", $expiry_alert_date);
			return $final_date;
		}
	}
	
	function date_month_addition($input_date, $adding_month)
	{
		if($input_date != ""){
			$dateArry = explode("-", $input_date);
			
			$Y=$dateArry[0];
			$m=$dateArry[1]+$adding_month;
			$d=$dateArry[2];
		
			//	$m="03"; $d="28"; $Y="2008";//put here server day,month,year...
			$expiry_alert_date = mktime(0,0,0,date($m),date($d),date($Y));
			$final_date=date("Y-m-d", $expiry_alert_date);
			return $final_date;
		}
	}
	
	function tep_rand($min = null, $max = null) {
	    static $seeded;
	
	    if (!$seeded) {
	      mt_srand((double)microtime()*1000000);
	      $seeded = true;
	    }
	
	    if (isset($min) && isset($max)) {
	      if ($min >= $max) {
	        return $min;
	      } else {
	        return mt_rand($min, $max);
	      }
	    } else {
	      return mt_rand();
	    }
  }

  
    
  function tep_create_random_value($length, $type = 'mixed') {
    if ( ($type != 'mixed') && ($type != 'chars') && ($type != 'digits')) return false;

    $rand_value = '';
    while (strlen($rand_value) < $length) {
      if ($type == 'digits') {
        $char = $this->tep_rand(0,9);
      } else {
        $char = chr($this->tep_rand(0,255));
      }
      if ($type == 'mixed') {
        if (eregi('^[a-z0-9]$', $char)) $rand_value .= $char;
      } elseif ($type == 'chars') {
        if (eregi('^[a-z]$', $char)) $rand_value .= $char;
      } elseif ($type == 'digits') {
        if (ereg('^[0-9]$', $char)) $rand_value .= $char;
      }
    }

    return $rand_value;
  }
  
  /**
	 * Function to populate the User image url.
	 *
	 * @param $user_image, $image_path, $val
	 * @author Arup Karan
	 * @uses getPhotographerImage
	 * @return string
	 */		
	function getUserImage($user_image, $image_path, $folder_name, $gender)
	{		

		$image_path_thumb		=	"";
			
		$image_path_thumb = BASEPATH_UPLOADS."user/".$folder_name."/";

		$image_dis_path = $image_path.'user/'.$folder_name.'/';
		
		$no_image		=	($gender==1)?'noimg_boy.gif':'noimg_girl.gif';
		
		if(strlen($user_image)>0)
		{
			$user_image = file_exists($image_path_thumb.$user_image)?$image_dis_path.$user_image:$image_dis_path.$no_image;
			//$user_image = $image_path_thumb.$user_image;
		}
		else
		{
			$user_image = $image_dis_path.$no_image;	
		}
		
		return $user_image;
	}
	
	

	/**
	 * Function to populate the Group image url.
	 *
	 * @param $image_name, $image_path
	 * @author Arup Karan
	 * @uses getGroupImage
	 * @return string
	 */		
	function getGroupImage($image_name, $image_path, $folder_name)
	{		
		
		$image_path_thumb		=	"";
			
		$image_path_thumb = BASEPATH_UPLOADS."group/group_image/".$folder_name."/";

		$image_dis_path = $image_path."group/group_image/".$folder_name."/";
		
		$no_image		=	'image_coming_soon.jpg';
		
		if(strlen($image_name)>0)
		{
			$image_name = file_exists($image_path_thumb.$image_name)?$image_dis_path.$image_name:$image_dis_path.$no_image;
			
		}
		else
		{
			$image_name = $image_dis_path.$no_image;	
		}
		
		return $image_name;
	}	
	
	/**
	 * Function to populate the Event image url.
	 *
	 * @param $image_name, $image_path
	 * @author Arup Karan
	 * @uses getEventImage
	 * @return string
	 */		
	function getEventImage($image_name, $image_path, $folder_name)
	{		
		
		$image_path_thumb		=	"";
			
		$image_path_thumb = BASEPATH_UPLOADS."event/event_image/".$folder_name."/";

		$image_dis_path = $image_path."event/event_image/".$folder_name."/";
		
		$no_image		=	'image_coming_soon.jpg';
		
		if(strlen($image_name)>0)
		{
			$image_name = file_exists($image_path_thumb.$image_name)?$image_dis_path.$image_name:$image_dis_path.$no_image;
			
		}
		else
		{
			$image_name = $image_dis_path.$no_image;	
		}
		
		return $image_name;
	}
		
 /**
	 * Function to populate the Music image url.
	 *
	 * @param $image_name, $image_path
	 * @author Arup Karan
	 * @uses getMusicImage
	 * @return string
	 */		
	function getForumImage($image_name, $image_path)
	{		
		
		$image_path_thumb		=	"";
			
		$image_path_thumb = BASEPATH_UPLOADS."forum/34x34/";

		$image_dis_path = $image_path.'forum/34x34/';
		
		$no_image		=	'image_coming_soon.jpg';
		
		if(strlen($image_name)>0)
		{
			$image_name = file_exists($image_path_thumb.$image_name)?$image_dis_path.$image_name:$image_dis_path.$no_image;
			
		}
		else
		{
			$image_name = $image_dis_path.$no_image;	
		}
		
		return $image_name;
	}
		
	
 /**
	 * Function to populate the Music image url.
	 *
	 * @param $image_name, $image_path
	 * @author Arup Karan
	 * @uses getMusicImage
	 * @return string
	 */		
	function getMusicImage($image_name, $image_path)
	{		
		
		$image_path_thumb		=	"";
			
		$image_path_thumb = BASEPATH_UPLOADS."music/music_image/48x48/";

		$image_dis_path = $image_path.'music/music_image/48x48/';
		
		$no_image		=	'image_coming_soon.jpg';
		
		if(strlen($image_name)>0)
		{
			$image_name = file_exists($image_path_thumb.$image_name)?$image_dis_path.$image_name:$image_dis_path.$no_image;
			
		}
		else
		{
			$image_name = $image_dis_path.$no_image;	
		}
		
		return $image_name;
	}
	
 /**
	 * Function to populate the Music image url.
	 *
	 * @param $image_name, $image_path
	 * @author Jignesh Chauhan
	 * @uses getVideoImage
	 * @return string
	 */		
	function getVideoImage($image_name, $image_path)
	{		

		$image_path_thumb		=	"";
			
		$image_path_thumb = BASEPATH_UPLOADS."video/video_image/99x78/";

		$image_dis_path = $image_path.'video/video_image/99x78/';
		
		$no_image		=	'image_coming_soon.jpg';
		
		if(strlen($image_name)>0)
		{
			$image_name = file_exists($image_path_thumb.$image_name)?$image_dis_path.$image_name:$image_dis_path.$no_image;
			
		}
		else
		{
			$image_name = $image_dis_path.$no_image;	
		}
		
		return $image_name;
	}	
	
		
/**
	 * Function to populate the payment procress through the credit card.
	 *
	 * @param $credit_card_detail,$auth_net_details
	 * @author Arup Karan
	 * @uses CreditCardPaymentProcess
	 * @return responce array.
	 */	
		
	function CreditCardPaymentProcess($credit_card_detail,$auth_net_details)
	{		
		$DEBUGGING					= 1;				# Display additional information to track down problems
		$TESTING					= 1;				# Set the testing flag so that transactions are not live
		$ERROR_RETRIES				= 2;				# Number of transactions to post if soft errors occur
		
		$cvv_code	= '';
		
		if(!isset($credit_card_detail['firstname']) || $credit_card_detail['firstname']=='')
		{
			$credit_card_detail['firstname']	=	$credit_card_detail['name_on_cc'];
		}	
		if(!isset($credit_card_detail['lastname']) || $credit_card_detail['lastname']=='')
		{
			$credit_card_detail['lastname']='';
		}	
		if(isset($credit_card_detail['x_card_code']) && $credit_card_detail['x_card_code']!='')
		{
			$cvv_code	=	$credit_card_detail['x_card_code'];
		}	
		
		#$auth_net_url				= "https://test.authorize.net/gateway/transact.dll";
		#  Uncomment the line ABOVE for test accounts or BELOW for live merchant accounts
		$auth_net_url				= "https://secure.authorize.net/gateway/transact.dll";
		
		$authnet_values				= array
		(
			"x_test_request"		=>	"FALSE",
			"x_login"				=>	$auth_net_details['auth_net_login_id'],
			"x_version"				=>	"3.1",
			"x_delim_char"			=>	"|",
			"x_delim_data"			=>	"TRUE",
			"x_url"					=>	"FALSE",
			"x_type"				=>	$auth_net_details['tran_type'],
			"x_method"				=>	"CC",
			"x_tran_key"			=>	$auth_net_details['auth_net_tran_key'],
			"x_relay_response"		=>	"FALSE",			
			"x_card_num"			=>	$credit_card_detail['cc_number'],
			"x_exp_date"			=>	$credit_card_detail['cc_exp_month'].substr($credit_card_detail['cc_exp_year'],2),
			"x_description"			=>	$auth_net_details['description'],
			"x_amount"				=>	$auth_net_details['amount'],
			"x_cust_id"				=>	($credit_card_detail['x_cust_id'])?$credit_card_detail['x_cust_id']:'',
			"x_invoice_num"			=>	'',
			"x_first_name"			=>	$credit_card_detail['firstname'],
			"x_last_name"			=>	$credit_card_detail['lastname'],
			"x_address"				=>	$credit_card_detail['billing_address'],
			"x_city"				=>	$credit_card_detail['city'],
			"x_state"				=>	$credit_card_detail['state'],
			"x_zip"					=>	$credit_card_detail['zip'],
			"x_country"				=>	($credit_card_detail['x_country'])?$credit_card_detail['x_country']:'US',
			"x_phone"				=>	($credit_card_detail['x_phone'])?$credit_card_detail['x_phone']:'',
			"x_fax"					=>	($credit_card_detail['x_fax'])?$credit_card_detail['x_fax']:'',
			"x_email"				=>	($credit_card_detail['x_email'])?$credit_card_detail['x_email']:'',
		);
		if(strlen($cvv_code)>=3){
			$authnet_values["x_card_code"]	=	$cvv_code;
		}
		//print_r($authnet_values);
		//exit;
		$fields = "";
		foreach( $authnet_values as $key => $value ) $fields .= "$key=" . urlencode( $value ) . "&";		
		
		
		###$ch = curl_init("https://test.authorize.net/gateway/transact.dll"); 
		###  Uncomment the line ABOVE for test accounts or BELOW for live merchant accounts
		/*$ch = curl_init("https://secure.authorize.net/gateway/transact.dll");
		curl_setopt($ch, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
		curl_setopt($ch, CURLOPT_POSTFIELDS, rtrim( $fields, "& " )); // use HTTP POST to send form data
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment this line if you get no gateway response. ###
		$resp = curl_exec($ch); //execute post and get results
		curl_close ($ch);*/	
		//print($resp);
		$resp	=	"1|2|13|(TESTMODE) Transaction Successfully Completed.|000000|P|11167111|||12.23||auth_capture||||||||||||||||||||||||||3A8D9D4234FAFD134B112E7749EA1F26|||||||||||||||||||||||||||||||FALSE|Customer Birth Month: 12|Customer Birth Day: 1|Customer Birth Year: 1959|Promotion: Spring Sale";	
		$text	=	$resp;
		$h = substr_count($text, "|");
		$h++;

		for($j=1; $j <= $h; $j++)
		{	
			$p = strpos($text, "|");

				if ($p === false) 
				{ // note: three equal signs
	
					if($j>=69)
					{
					} 
					else 
					{
					}
				}
				else
				{

					$p++;


					//  We found the x_delim_char and accounted for it . . . now do something with it
	
					//  get one portion of the response at a time
					$pstr = substr($text, 0, $p);

					//  this prepares the text and returns one value of the submitted
					//  and processed name/value pairs at a time
					//  for AIM-specific interpretations of the responses
					//  please consult the AIM Guide and look up
					//  the section called Gateway Response API
					$pstr_trimmed = substr($pstr, 0, -1); // removes "|" at the end

					if($pstr_trimmed=="")
					{
						$pstr_trimmed="NO VALUE RETURNED";
					}
				
					switch($j)
					{
						case 1:
							//echo "Response Code: ";			
							$responce_code="0";
							$responce_text="";
							if($pstr_trimmed=="1")
							{
								$responce_code=1;
								$responce_text="Approved";
							}
							elseif($pstr_trimmed=="2")
							{
								$responce_code=2;
								$responce_text="Declined";
							}
							elseif($pstr_trimmed=="3")
							{
								$responce_code=3;
								$responce_text="Error";
							}
			
							break;

						case 4:
							//echo "Response Reason Text: ";
							$responce_reason_text=$pstr_trimmed;
			
							break;
			
						case 5:
							//echo "Approval Code: ";
							$approval_code= $pstr_trimmed;
			
							break;
				
						case 7:
							//echo "Transaction ID: ";
							$trans_id= $pstr_trimmed;
			
							break;

						case 8:
							//echo "Invoice Number (x_invoice_num): ";
							$invoice_num= $pstr_trimmed;
			
							break;
							
						case 10:
							//echo "Amount (x_amount): ";
							$amount= $pstr_trimmed;
			
							break;

					}
					// remove the part that we identified and work with the rest of the string
					$text = substr($text, $p);

				}
		}						
		
		$result	=	array(
							'responce_code'=>$responce_code,
							'responce_text'=>$responce_text,
							'responce_reason_text'=>$responce_reason_text,
							'approval_code'=>$approval_code,
							'trans_id'=>$trans_id,
							'invoice_num'=>$invoice_num,
							'amount'=>$amount
						);

		return $result;
	}	
	
	/**
	 * Function to call he payment procress of credit card.
	 *
	 * @param $caller, $cc_details, $auth_net_details
	 * @author Arup Karan
	 * @uses makePayByCreditCard
	 * @return responce array.
	 */	
		
	function makePayByCreditCard($caller, $cc_details, $auth_net_details)
	{
		
			$credit_card_detail['x_cust_id']			=	 "";
			$credit_card_detail['billing_address']		=	 $cc_details['billadd'];
			$credit_card_detail['state']				=	 $cc_details['state'];
			$credit_card_detail['city']					=	 $cc_details['city'];
			$credit_card_detail['zip']					=	 $cc_details['zipcode'];
			$credit_card_detail['x_country']			=	 $cc_details['country'];
			$credit_card_detail['x_phone']				=	 "";
			$credit_card_detail['x_fax']				=	 "";
			$credit_card_detail['x_email']				=	 "";
			$credit_card_detail['name_on_cc']			=	 $cc_details['cc_name'];
			$credit_card_detail['cc_number']			=	 $cc_details['cc_number'];
			$credit_card_detail['cc_exp_month']			=	 $cc_details['exp_month'];
			$credit_card_detail['cc_exp_year']			=	 $cc_details['exp_year'];
			$credit_card_detail['x_card_code']			=	 $cc_details['cc_verify'];

	
		$result					=	$caller->common_function->CreditCardPaymentProcess($credit_card_detail, $auth_net_details);
		//$flag[0]				=	$result['responce_code'];
		//$flag[1]				=	$result['responce_reason_text'];		

		return $result;
	}
	
	/**
	 * Function to validate the credit card.
	 *
	 * @param $cc_num, $cc_type
	 * @author Arup Karan
	 * @uses is_valid_credit_card
	 * @return string error message.
	 */	
	
	function is_valid_credit_card($cc_num, $cc_type) {
		$verified=false;
		if($cc_type == "American Express") {
		$denum = "American Express";
		} elseif($cc_type == "Diners") {
		$denum = "Diner's Club";
		} elseif($cc_type == "Discover") {
		$denum = "Discover";
		} elseif($cc_type == "Master Card") {
		$denum = "Master Card";
		} elseif($cc_type == "Visa") {
		$denum = "Visa";
		}
	
		if($cc_type == "American Express") {
		$pattern = "/^([34|37]{2})([0-9]{13})$/";//American Express
		if (preg_match($pattern,$cc_num)) {
		$verified = true;
		} else {
		$verified = false;
		}
		
		
		} elseif($cc_type == "Diners") {
		$pattern = "/^([30|36|38]{2})([0-9]{12})$/";//Diner's Club
		if (preg_match($pattern,$cc_num)) {
		$verified = true;
		} else {
		$verified = false;
		}
		
		
		} elseif($cc_type == "Discover") {
		$pattern = "/^([6011]{4})([0-9]{12})$/";//Discover Card
		if (preg_match($pattern,$cc_num)) {
		$verified = true;
		} else {
		$verified = false;
		}
		
		
		} elseif($cc_type == "Master Card") {
		$pattern = "/^([51|52|53|54|55]{2})([0-9]{14})$/";//Mastercard
		if (preg_match($pattern,$cc_num)) {
		$verified = true;
		} else {
		$verified = false;
		}
		
		
		} elseif($cc_type == "Visa") {
		$pattern = "/^([4]{1})([0-9]{12,15})$/";//Visa
		if (preg_match($pattern,$cc_num)) {
		$verified = true;
		} else {
		$verified = false;
		}
		
		}
		$errortext	=	'';
		if($verified == false) {
			$errortext='Credit card number is invalid.';
		
		}
		
		return $errortext;


	}
	
	/**
	 * Function to populate the paypal payment.
	 *
	 * @param $paypal_details
	 * @author Arup Karan
	 * @uses paypal_Payment
	 * @return 
	 */	
		
	function paypal_Payment($paypal_details){?>
	<body>
	
	<form name="paypalFrm" action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<!-- <form name="paypalFrm" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post"> -->
	<input type="hidden" name="cmd" value="_xclick">
	<input type="hidden" name="business" value="<?=$paypal_details['paypal_ID']?>">
	<input type="hidden" name="item_name" value="<?=$paypal_details['item_name']?>"> 
	<input type="hidden" name="currency_code" value="<?=$paypal_details['currency_code']?>">
	<input type="hidden" name="amount" value="<?=$paypal_details['terfer_amount']?>">
	<input type="hidden" name="return" value="<?=$paypal_details['success_url']?>">
	<input type="hidden" name="cancel_return" value="<?=$paypal_details['cancel_url']?>">
    <input type="hidden" name="notify_url" value="<?=$paypal_details['notify_url']?>">
    <input type="hidden" name="custom" value="<?=$paypal_details['custom']?>">
	<input type="hidden" name="first_name" value="<?=$paypal_details['first_name']?>">
	<input type="hidden" name="last_name" value="<?=$paypal_details['last_name']?>">
	<input type="hidden" name="address1" value="<?=$paypal_details['address1']?>">
	<input type="hidden" name="address2" value="<?=$paypal_details['address2']?>">
	<input type="hidden" name="city" value="<?=$paypal_details['city']?>">
	<input type="hidden" name="state" value="<?=$paypal_details['state']?>">
	<input type="hidden" name="zip" value="<?=$paypal_details['zip']?>">
	<input type="hidden" name="lc" value="<?=$paypal_details['country']?>">
	<input type="hidden" name="email" value="<?=$paypal_details['email']?>">
	    
    <!-- Customer Information -->
	</form>
	</body>
	<script language="javascript">
	//alert (document.paypalFrm.business.value);
		document.paypalFrm.submit();
	</script>
	<? }
	
	
	
		function paypal_recurring_Payment($paypal_details){?>
	<body>
<form name="paypalFrm" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<!--<form name="paypalFrm" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">-->
<input type="hidden" name="cmd" value="_ext-enter">
<input type="hidden" name="redirect_cmd" value="_xclick-subscriptions">
<input type="hidden" name="return" value="<?=$paypal_details['success_url']?>">
<input type="hidden" name="cancel_return" value="<?=$paypal_details['cancel_url']?>">
<input type="hidden" name="notify_url" value="<?=$paypal_details['notify_url']?>">
<input type="hidden" name="custom" value="<?=$paypal_details['custom']?>">
<input type="hidden" name="business" value="<?=$paypal_details['paypal_ID']?>">
<input type="hidden" name="item_name" value="<?=$paypal_details['item_name']?>">
<input type="hidden" name="item_number" value="1">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<!--<input type="hidden" name="a1" value="0.00">
<input type="hidden" name="p1" value="3">
<input type="hidden" name="t1" value="M">-->
<input type="hidden" name="a3" value="<?=$paypal_details['a3']?>">
<input type="hidden" name="p3" value="<?=$paypal_details['p3']?>">
<input type="hidden" name="t3" value="<?=$paypal_details['t3']?>">  
<input type="hidden" name="src" value="1">
<input type="hidden" name="sra" value="1">
<input type="hidden" name="srt" value="<?=$paypal_details['srt']?>">
<!-- <input type="hidden" name="modify" value="1"> -->
<input type="hidden" name="first_name" value="<?=$paypal_details['first_name']?>">
<input type="hidden" name="last_name" value="<?=$paypal_details['last_name']?>">
<input type="hidden" name="address1" value="<?=$paypal_details['address1']?>">
<input type="hidden" name="address2" value="<?=$paypal_details['address2']?>">
<input type="hidden" name="city" value="<?=$paypal_details['city']?>">
<input type="hidden" name="state" value="<?=$paypal_details['state']?>">
<input type="hidden" name="zip" value="<?=$paypal_details['zip']?>">
<input type="hidden" name="lc" value="<?=$paypal_details['country']?>">
<input type="hidden" name="email" value="<?=$paypal_details['email']?>">
<!--<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">-->
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

	</body>
	<script language="javascript">
	//alert (document.paypalFrm.business.value);
	document.paypalFrm.submit();
	</script>
	<? }
	
	function printTagCloud($tags) {
        // $tags is the array
       
        arsort($tags);
       
        $max_size = 32; // max font size in pixels
        $min_size = 12; // min font size in pixels
       
        // largest and smallest array values
        $max_qty = max(array_values($tags));
        $min_qty = min(array_values($tags));
       
        // find the range of values
        $spread = $max_qty - $min_qty;
        if ($spread == 0) { // we don't want to divide by zero
                $spread = 1;
        }
       
        // set the font-size increment
        $step = ($max_size - $min_size) / ($spread);
       $return	='';
        // loop through the tag array
        foreach ($tags as $key => $value) {
                // calculate font-size
                // find the $value in excess of $min_qty
                // multiply by the font-size increment ($size)
                // and add the $min_size set above
                $size = round($min_size + (($value - $min_qty) * $step));
       
                $return	=	$return.'<a href="#" style="font-size: ' . $size . 'px" title="' . $value . ' things tagged with ' . $key . '">' . $key . '</a> ';
        }
        return $return;
        
###################  This part of code need to add in display page #############################
         /* $tags = array('weddings' => 32, 'birthdays' => 41, 'landscapes' => 62, 'ham' => 51, 'chicken' => 23, 'food' => 91, 'turkey' => 47, 'windows' => 82, 'apple' => 27);

echo $this->common_function->printTagCloud($tags);*/
###################  This part of code need to add in display page #############################         

	}
	
	//Added by Deepak
	function banner_section($selection,$sel='')
	{
		
		//$sel =preg_replace('/[ ]/','',$sel);
		//$sel =preg_replace('/[,]/', '##', $sel);
		if($selection=='') $selection ='01';
		$selarr =split('~',$sel);
		
		$this->banner_section_list['01']['01']	= "Home";
		$this->banner_section_list['02']['01']	= "Jobs";
		$this->banner_section_list['02']['02']	= "Education";
		$this->banner_section_list['02']['03']	= "Dating";
		$this->banner_section_list['02']['04']	= "Search";
		//$selection ='02';
		$ban_size	= 	$this->banner_section_list;
		
		foreach ($ban_size as $key=>$value){

			if($key==$selection)
			{ 
				$i=0;
				foreach($value as $key1=>$val) {
				$sel ='';
				
				if($selarr[$i] ==$val)
				{  $sel ='checked'; $i++;}
			?>
				<div id="secId" class="floatl">
				<input name="section_ids[]" id="section_id" type="checkbox" value="<?=$val?>" <?=$sel?> />
				</div>
     	 		<div id="secVal" class="floatl padt2 padr15"><?php echo $val; ?></div>
		<?php 
			}
		  }
		}                                      
	} // BANNER_SECTION FUNCTION END
	
	function get_total_entries($competition_id)
	{
		$this->db->where("in_competition_id", $competition_id);
		$this->db->where("flg_is_deleted", '0');
		$this->db->from('tbl_competition_entries');

		$query	=	$this->db->get();	
		return $query->num_rows();
	}
	
   function birthday ($birthday){
   //"1984-07-05"
    list($year,$month,$day) = explode("-",$birthday);
    $year_diff  = date("Y") - $year;
    $month_diff = date("m") - $month;
    $day_diff   = date("d") - $day;
    if ($day_diff < 0 || $month_diff < 0)
      $year_diff--;
    return $year_diff;
  }
  
  	//Added by Puru
	function price_extract($par, $str)
	{
		switch($str)
		{
			case 'resume':
				if($par == '1 Month Accessibility')
				{
					return 539.95;
				}
				elseif($par == '3 Months Accessibility')
				{
					return 1259.95;
				}
				elseif($par == '6 Months Accessibility')
				{
					return 2339.95;
				}

				elseif($par == '12 Months Accessibility')
				{
					return 4139.95;
				}
				else
				{
					return '';
				}	
				break;	
				
			case 'job':
				if($par == '1 Job Posting')
				{
					return 49.95;
				}
				elseif($par == '5 Job Postings')
				{
					return 189.95;
				}
				elseif($par == '10 Job Postings')
				{
					return 349.95;
				}
				elseif($par == '20 Job Postings')
				{
					return 494.95;
				}
				elseif(preg_match('/.*\(.*250\s+job.*\)/', $par))
				{
					return 624.95;
				}
				elseif(preg_match('/.*\(.*500\s+job.*\)/', $par))
				{
					return 1099.95;
				}
				elseif(preg_match('/.*\(.*1000\s+job.*\)/', $par))
				{
					return 1999.95;					
				}
				else
				{
					return '';
				}
				break;
		}
	}						

	function price_extract2($par, $str)
	{
		switch($str)
		{
			case 'resume':
				if($par == '1R')
				{
					return 	539.95;			//539.95;
				}
				elseif($par == '3R')
				{
					return 1259.95;
				}
				elseif($par == '6R')
				{
					return 2339.95;
				}

				elseif($par == '12R')
				{
					return 4139.95;
				}
				else
				{
					return 0;
				}	
				break;	
				
			case 'job':
				if($par == '1J')
				{
					return 49.95;
				}
				elseif($par == '5J')
				{
					return 189.95;
				}
				elseif($par == '10J')
				{
					return 349.95;
				}
				elseif($par == '20J')
				{
					return 494.95;
				}
				elseif($par == '250J')
				{
					return 624.95;
				}
				elseif($par == '500J')
				{
					return 1099.95;
				}
				elseif($par == '1000J')
				{
					return 1999.95;					
				}
				else
				{
					return 0;
				}
				break;
		}
	}						
		
	function get_payment_job_option1($choice, $string)
	{
		switch($choice) {
			case 'RAP':			
				if($string == 1)
				{	
					return '1 Month Resume Accessibility Plan';
					break;	
				}
				elseif($string == 3)
				{
					return '3 Months Resume Accessibility Plan';
					break;	
				}
				elseif($string == 6)
				{
					return '6 Months Resume Accessibility Plan';
					break;	
				}
				elseif($string == 12)
				{
					return '12 Months Resume Accessibility Plan';
					break;	
				}	
				else
				{
					return '';
				}										
		
			case 'JPP':
				if($string == 1)
				{
					return '1 Job Posting Plan';
					break;	
				}
				elseif($string == 5)
				{
					return '5 Job Posting Plan';
					break;	
				}
				elseif($string == 10)
				{
					return '10 Job Posting Plan';
					break;	
				}
				elseif($string == 20)
				{
					return '20 Job Postings Plan';
					break;	
				}
				elseif($string == 250)
				{
					return '3 Months Job Subscription Plan';
					break;	
				}
				elseif($string == 500)
				{
					return '6 Months Job Subscription Plan';
					break;	
				}
				elseif($string == 1000)
				{
					return '12 Months Job Subscription Plan';
					break;	
				}
				else
				{
					return '';
				}	
		}
		
	}	
	
	function number_extract3($par, $str)
	{
		switch($str)
		{
			case 'resume':
				if($par == '1 Month Accessibility')
				{
					return 2;
				}
				elseif($par == '3 Months Accessibility')
				{
					return 3;
				}
				elseif($par == '6 Months Accessibility')
				{
					return 4;
				}

				elseif($par == '12 Months Accessibility')
				{
					return 5;
				}
				else
				{
					return '';
				}	
				break;	
				
			case 'jobs':
				if($par == '1 Job Posting')
				{
					return 6;
				}
				elseif($par == '5 Job Postings')
				{
					return 7;
				}
				elseif($par == '10 Job Postings')
				{
					return 8;
				}
				elseif($par == '20 Job Postings')
				{
					return 9;
				}
				elseif(preg_match('/.*\(.*250\s+job.*\)/', $par))
				{
					return 10;
				}
				elseif(preg_match('/.*\(.*500\s+job.*\)/', $par))
				{
					return 11;
				}
				elseif(preg_match('/.*\(.*1000\s+job.*\)/', $par))
				{
					return 12;					
				}
				else
				{
					return '';
				}
				break;
		}
	}
	
	/*
	
	This function is used to handle the unicode characters.
	
	This is in replacement of htmlentities to handle the unicode characters.
	
	All you need to do is replace htmlentities($str) from code with unicode_htmlentities($str)
	
	By:RNS
	*/
	function unicode_htmlentities($str)
	{
		$str_arr=explode("&#",$str);
		$count=count($str_arr);
		$out_str=htmlentities($str_arr[0]);
		for($i=1;$i<$count;$i++)
		{
			$out_str_arr=explode(";",$str_arr[$i]);
			$count1=count($out_str_arr);
			$out_str.="&#".$out_str_arr[0].";";
			for($j=1;$j<$count1;$j++)
			{
				if($j==$count1-1)	
					$out_str.=htmlentities($out_str_arr[$j]);
				else
					$out_str.=htmlentities($out_str_arr[$j].";");
			}
		}
		return $out_str;
	}
	
	
	function makeSafe($the_data){

		$str = @mysql_real_escape_string($the_data);
		$str = htmlentities($str, ENT_QUOTES);

		return $str;

	}
	
	
	/**
	 * Convert text url into clickable hyperlinks.
	 *
	 * @param string $text
	 * @author Arup Karan
	 * @uses 	makeClickableLinks
	 * @return $text with hyperlinks
	 */
	
	
	function makeClickableLinks($text) {

		
	/*$message = eregi_replace("((([ftp://])|(http(s?)://))((:alnum:|[-\%\.\?\=\#\_\:\&\/\~\+\@\,\;])*))","<a href = '\\0' target='_blank'>\\0</a>",$message);

	$message = eregi_replace("(([^/])www\.|(^www\.))((:alnum:|[-\%\.\?\=\#\_\:\&\/\~\+\@\,\;])*)","\\2<a href = 'http://www.\\4' target='_blank'>www.\\4</a>",$message);*/
	
	$text	=	$this->removeHyperlink($text);
	
	$text = eregi_replace('(((f|ht){1}(tp|tps)://)[-a-zA-Z0-9@:%_\+.~#?&//=]+)',
	
	'<a href="\\1" target="_blank">\\1</a>', $text);
	
	$text = eregi_replace('([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&//=]+)',
	
	'\\1<a href="http://\\2" target="_blank">\\2</a>', $text);
	
	$text = eregi_replace('([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})',
	
	'<a href="mailto:\\1">\\1</a>', $text);
	
	
	return $text;
	
	
	}
	
	
	function removeHyperlink($text){
		
	$text	=	  preg_replace('#(<a.*?>).*?(</a>)#', '$1$2', $text);
	
	$a_hrf = "/<a href\=\"/";
	$a_close ="/\"\><\/a>/";
	
	
	$text = preg_replace($a_hrf, '', $text);
	$text = preg_replace($a_close, '', $text);
	
	return $text;

	}
	
	function URLref($sentence){
	$temp = explode(" ", $sentence);
	$new = "";
	foreach($temp as $i){
	if(preg_match('([A-Za-z][A-Za-z0-9+.-]{1,120}:[A-Za-z0-9/](([A-Za-z0-9$_.+!*,;/?:@&~=-])|%[A-Fa-f0-9]{2}){1,333}(#([a-zA-Z0-9][a-zA-Z0-9$_.+!*,;/?:@&~=%-]{0,1000}))?)', $i)){
	  $new .= '<a href="'.$i.'">'.$i.'</a>';
	}else{
	  $new .= "$i ";
	}
	}
	return trim($new);
	}
	
	
	function upload_Classifile($id,$filename)
 	{
 		global $settings;$settings['imagefolder']=$filename;
 		$img = $_FILES[$id]['name']; 
 		if($img)
		{
			$imgname = explode ( '.', $img );
	 		$extension = array_pop ( $imgname );
	 		$img = implode( '.', $imgname );
	 		$ctr = '';
	 		while ( file_exists ( $settings['imagefolder'] . $img . $ctr . '.' . $extension ) )
	 		{
	 			$ctr = intval ($ctr) + 1;
 			}
 			$img = $img . $ctr . '.' . $extension;
 		}
 		move_uploaded_file ( $_FILES[$id]['tmp_name'], $settings['imagefolder'] . $img );
 		return $img;
 	}
	

	
}
?>