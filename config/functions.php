	<?php 	
		function getCoordinates($address, $key){
		    if(!empty($address)){
		        $formattedAddr = str_replace(' ','+',$address);
		        $geocodeFromAddr = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=true_or_false&key='.$key); 
		        $output = json_decode($geocodeFromAddr);
		        $data['latitude']  = $output->results[0]->geometry->location->lat; 
		        $data['longitude'] = $output->results[0]->geometry->location->lng;
		        if(!empty($data)){
		            return $data;
		        }else{
		            return false;
		        }      
		    }else{
		        return false;   
		    }
		}	
	
		function getAddress($latitude,$longitude, $key){
		    if(!empty($latitude) && !empty($longitude)){
		        $geocodeFromLatLong = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($latitude).','.trim($longitude).'&sensor=true_or_false&key='.$key);
		        $output = json_decode($geocodeFromLatLong);
		        $status = $output->status;
		        $address = ($status=="OK")?$output->results[1]->formatted_address:'';
		        if(!empty($address)){
		            return $address;
		        }else{
		            return false;
		        }
		    }else{
		        return false;   
		    }
		}

		// GET COORDINATES
		// $key = 'API_Key_Here';
		// $latitude = '51.6111921';
		// $longitude = '-0.1634203';
		// $address = getAddress($latitude,$longitude,$key);
		// $address = $address?$address:'Not found';
		// echo $address;

		// GET ADDRESS
		// $address = '8 Short Way, London N12 0RX';
		// $latLong = getCoordinates($address, $key);
		// $latitude = $latLong['latitude']?$latLong['latitude']:'Not found';
		// $longitude = $latLong['longitude']?$latLong['longitude']:'Not found';
		// echo 'Latitude: '.$latitude.'<br>longitude: '.$longitude;

		function formatDate(){
			
		}
	?>
