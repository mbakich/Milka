set -e
git pull
./build_release.sh
./deploy_stack.sh

