pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        sh '''
          yarn
          yarn build
        '''
      }
    }
    stage('Deploy') {
      steps {
        sh '''
          /root/scripts/deploy.sh yaf-starter-kit
        '''
      }
    }
  }
}