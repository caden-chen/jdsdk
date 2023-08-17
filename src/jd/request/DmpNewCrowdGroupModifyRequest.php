<?php
class DmpNewCrowdGroupModifyRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dmp.new.crowd.group.modify";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                    	                   			private $accessPin;
    	                        
	public function setAccessPin($accessPin){
		$this->accessPin = $accessPin;
         $this->apiParas["accessPin"] = $accessPin;
	}

	public function getAccessPin(){
	  return $this->accessPin;
	}

                        	                        	                   			private $authType;
    	                        
	public function setAuthType($authType){
		$this->authType = $authType;
         $this->apiParas["authType"] = $authType;
	}

	public function getAuthType(){
	  return $this->authType;
	}

                        	                        	                        	                        	                        	                        	                   			private $crowdGroupId;
    	                        
	public function setCrowdGroupId($crowdGroupId){
		$this->crowdGroupId = $crowdGroupId;
         $this->apiParas["crowdGroupId"] = $crowdGroupId;
	}

	public function getCrowdGroupId(){
	  return $this->crowdGroupId;
	}

                        	                   			private $crowdGroupName;
    	                        
	public function setCrowdGroupName($crowdGroupName){
		$this->crowdGroupName = $crowdGroupName;
         $this->apiParas["crowdGroupName"] = $crowdGroupName;
	}

	public function getCrowdGroupName(){
	  return $this->crowdGroupName;
	}

}





        
 

