<?php

namespace FoxyPay;

class FoxyPay {
	
	private $token;
	private $webhookUrl;
	private $successUrl;
	private $failUrl;
	private $info;
	private $amount;
	private $description;
	
	function __construct($token)
	{
		$this->token = $token;
	}
	
	public function setWebHookUrl($url)
	{
		$this->webhookUrl = $url;
	}
	
	public function setSuccessUrl($url)
	{
		$this->successUrl = $url;
	}
	
	public function setFailUrl($url)
	{
		$this->failUrl = $url;
	}
	
	public function setInfo($info)
	{
		$this->info = $info;
	}
	
	public function setAmount($amount)
	{
		$this->amount = (int)$amount * 100;
	}
	
	public function setDescription($description = "Payment")
	{
		$this->description = $description;
	}
	
	public function getPayUrl()
	{
		try{
			$post = [
				"amount" => $this->amount,
				"description" => $this->description,
				"webhook_url" => $this->webhookUrl,
				"success_url" => $this->successUrl,
				"fail_url" => $this->failUrl,
				"info" => $this->info
			];

			$post = http_build_query($post);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://foxypay.net/api/payment");
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, [
				'token: ' . $this->token
			]);

			$response = curl_exec($ch);

			curl_close($ch);

			$response = json_decode($response);

			if($response->success)
			{
				return $response->redirect_url;
			} else {
				throw new Exception($response->err);
			}
		} catch (Exception $e) {
			throw new Exception($e->getMessage());
		}
	}
}