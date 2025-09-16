export default {
  name: "UserComponent",
  props: {
    user: {
      type: String,
      required: true,
    },
  },
  template: `
    <div class="card mb-4">
        <div class="card-content">
            {{user}}
            <slot :user="user" :isOnline="isUserOnline"></slot>
        </div>
    </div>
  `,
  computed: {
    isUserOnline() {
      return Math.random() > 0.5; // Simula status online/offline
    },
  },
};
