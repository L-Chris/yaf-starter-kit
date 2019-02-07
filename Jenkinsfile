pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        sh '''
          composer install
        '''
      }
    }
    stage('Deploy') {
      steps {
        sh '''
          /root/scripts/deploy-server.sh yaf-starter-kit
        '''
      }
    }
  }
}