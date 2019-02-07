pipeline {
  agent any
  stages {
    stage('Deploy') {
      steps {
        sh '''
          /root/scripts/deploy.sh yaf-starter-kit
        '''
      }
    }
  }
}