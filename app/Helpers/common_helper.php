<?php
use CodeIgniter\Config\Services;

if (!function_exists('getUserAgent')) {
  function getUserAgent()
  {
    $request = service('request');
    
    // 사용자 환경 정보
    $result = [
      'platform' => $request->getUserAgent()->getPlatform(),
      'browser' => $request->getUserAgent()->getBrowser(),
      'version' => $request->getUserAgent()->getVersion(),
      'referrer' => $request->getUserAgent()->getReferrer(),
      'agentString' => $request->getUserAgent()->getAgentString(),
      'isMobile' => $request->getUserAgent()->isMobile(),
      'isRobot' => $request->getUserAgent()->isRobot(),
    ];
    return $result;
  }
}