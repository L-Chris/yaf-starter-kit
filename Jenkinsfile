pipeline {
  agent any
  stages {
    stage('Deploy') {
      steps {
        sh '''
          /root/scripts/deploy-server.sh yaf-starter-kit
        '''
      }
    }
  }
}